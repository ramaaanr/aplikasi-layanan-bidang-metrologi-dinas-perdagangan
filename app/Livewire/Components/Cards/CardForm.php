<?php

namespace App\Livewire\Components\Cards;

use App\Livewire\Rules\AjukanTeraRules;
use Illuminate\Support\Facades\Storage;
use App\Livewire\Forms\AjukanTeraForm;
use Carbon\Carbon;
use Livewire\Component;
use Ramsey\Uuid\Nonstandard\Uuid;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;


class CardForm extends Component
{

  use WithFileUploads;

  public $isSubmitButtonDisabled = 'false';
  public $sentenceCaseTitle;
  public $identitasUttp;
  public $tera;
  public $id;
  public $jenisUttp;
  public $success = false;
  public $message = null;
  public $isOnUpdate = true;
  public $status;

  public AjukanTeraForm $form;

  public function updatedStatus()
  {

    switch ($this->status) {
      case 'Diajukan':
        $this->form->keterangan = "Tera sedang diajukan dan diproses.";
        break;
      case 'Dijadwalkan':
        Carbon::setlocale('id');
        $tanggalPengujian = Carbon::parse($this->form->tanggal_pengujian)->isoFormat('dddd, DD MMMM YYYY');
        $this->form->keterangan = "Pemohon dapat melakukan pengujian tera pada tanggal $tanggalPengujian, bertempat di {$this->form->alamat_pengujian}.";
        break;
      case 'Dibatalkan':
        $this->form->keterangan = "Tera Dibatalkan.";
        break;
      case 'Selesai':
        $this->form->keterangan = "Tera Selesai.";
        break;
    }
    $this->form->status = $this->status;
  }

  private function getRandomCode(): string
  {
    $uuid = Uuid::uuid4();
    $uuidStr = $uuid->toString();
    $uuid10Digit = substr($uuidStr, -10);
    return strtoupper($uuid10Digit);
  }

  public function getTodayDate()
  {
    return Carbon::now()->format('Y-m-d');
  }

  public function downloadSuratPermohonan()
  {
    return Storage::download('public/' . $this->form->dokumen_surat_permohonan, "surat_permohonan_$this->id");
  }
  public function downloadSkhpSebelumnya()
  {
    return Storage::download('public/' . $this->form->dokumen_skhp_sebelumnya, "skhp_sebelumnya_$this->id");
  }
  public function downloadBuktiPendukungLainnya()
  {
    return Storage::download('public/' . $this->form->dokumen_bukti_pendukung_lainnya, "bukti_pendukung_lainnya_$this->id");
  }

  public function showSuccessAlert()
  {
    session()->flash('success', [
      'title' => $this->form->kode_pengajuan,
      'head_content' => "",
      'body_content' => 'Simpan kode pengajuan untuk diserahkan ke petugas. Tunggu dan pantau status pengajuan anda dalam halaman data tera sebelum pengujian tera anda dijadwalkan.',
    ]);
  }

  #[On('submit-uttp-fail')]
  public function showErrorAlert($e)
  {
    session()->flash('error', [
      'title' => 'Pengajuan Tera Gagal',
      'head_content' => 'Terjadi kesalahan pada website, silahkan hubungi Admin',
      'body_content' => $e,
    ]);
  }


  public function submit()
  {
    $rules = new AjukanTeraRules();
    $this->isSubmitButtonDisabled = true;
    try {
      $this->dispatch('validate-uttp');
      $this->form->alamat_pengujian = $this->form->tempat_pengujian == 'di_kantor' ? 'Kantor Dinas Perdagangan Jalan Pangeran Suriansayah No. 05 Lokatabat Utara Banjarbaru' : $this->form->alamat_pengujian;
      $this->validate($rules->getRules(), $rules->getMessages(), $rules->getAttributes());
      $this->form->store();
      $this->dispatch('submit-uttp');
      Storage::deleteDirectory('public/');
      $this->showSuccessAlert();
    } catch (\Illuminate\Database\QueryException $e) {
      Storage::deleteDirectory('public/');
      $this->showErrorAlert($e);
    } finally {
      $this->isSubmitButtonDisabled = 'false';
    }
  }

  public function validateFileReupload()
  {
    if ($this->form->file_dokumen_surat_permohonan != null) {
      $this->validate([
        'form.file_dokumen_surat_permohonan' => 'max:2048|mimes:pdf',
      ], [
        'max' => 'File maksimal 2MB',
        'mimes' => 'File harus PDF',
      ]);
    }
    if ($this->form->file_dokumen_bukti_pendukung_lainnya != null) {
      $this->validate([
        'form.file_dokumen_bukti_pendukung_lainnya' => 'max:2048|mimes:pdf',
      ], [
        'max' => 'File maksimal 2MB',
        'mimes' => 'File harus PDF',
      ]);
    }
    if ($this->form->file_dokumen_skhp_sebelumnya != null) {
      $this->validate([
        'form.file_dokumen_skhp_sebelumnya' => 'max:2048|mimes:pdf',
      ], [
        'max' => 'File maksimal 2MB',
        'mimes' => 'File harus PDF',
      ]);
    }
  }


  public function update()
  {
    $this->isSubmitButtonDisabled = true;
    $rules = new AjukanTeraRules();
    try {
      $this->form->alamat_pengujian = $this->form->tempat_pengujian == 'di_kantor' ? 'Kantor Dinas Perdagangan Jalan Pangeran Suriansayah No. 05 Lokatabat Utara Banjarbaru' : $this->form->alamat_pengujian;
      $this->updatedStatus();
      $this->dispatch('validate-uttp');
      $this->validateFileReupload();
      $this->validate(
        $rules->getRulesWithoutFile(),
        $rules->getMessages(),
        $rules->getAttributes(),
      );
      $this->form->update($this->id);
      $this->dispatch('update-uttp');
      Storage::deleteDirectory('public/');
      $this->showSuccessAlert();
    } catch (\Throwable $e) {
      dd($e);
    } catch (\Illuminate\Database\QueryException $e) {
      Storage::deleteDirectory('public/');
      $this->showErrorAlert($e);
    } finally {
      $this->isSubmitButtonDisabled = 'false';
    }
  }

  public function mount()
  {
    $words = explode('-', $this->tera);
    $sentenceCase = array_map(function ($word) {
      if ($word == 'bbm') return 'BBM';
      return ucfirst($word);
    }, $words);
    $this->sentenceCaseTitle = implode(' ', $sentenceCase);
    $this->jenisUttp = config("tera.$this->tera.jenis_uttp");
    if ($this->tera == 'timbangan-jembatan') $this->form->tempat_pengujian = 'di_luar_kantor';
    if ($this->isOnUpdate) {
      $this->form->jenis_tera = $this->tera;
      $id = request()->query('id');
      $this->id = $id;
      $this->form->setAndGetPropertiesFromTable($id);
      $this->status = $this->form->status;
      $this->identitasUttp = config("tera.$this->tera.model_uttp")::where(config("tera.$this->tera.jenis") . "_id", $id)->select(['id'])->get();
    } else {
      $this->form->setProperties($this->getRandomCode(), $this->tera);
    }
  }

  public function render()
  {
    return view('components.cards.card-form');
  }
}
