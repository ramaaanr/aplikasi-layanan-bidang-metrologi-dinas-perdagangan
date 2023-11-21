<?php

namespace App\Livewire\Components\Cards;

use App\Livewire\Rules\AjukanTeraRulesTumBbm;
use Illuminate\Support\Facades\Storage;
use App\Livewire\Forms\AjukanTeraFormTumBbm;
use App\Models\Perusahaan;
use App\Models\Kendaraan;
use Carbon\Carbon;
use Livewire\Component;
use Ramsey\Uuid\Nonstandard\Uuid;
use Livewire\WithFileUploads;
use App\Models\TeraJenisA;
use Livewire\Attributes\Rule;



class CardFormTumBbm extends Component
{

  use WithFileUploads;
  public $prevTanggalCekFisik;
  public $prevNamaPerusahaan;
  public $prevVolume;
  public $prevNomorPolisi;
  public $jenisDukungan = '';
  #[Rule('required', message: 'Perusahaan Wajib Diisi!')]
  public $idPerusahaan;
  public $opsiPerusahaan;
  #[Rule('required', message: 'Kendaraan Wajib Diisi!')]
  public $idKendaraan;
  public $opsiKendaraan;
  public $isSubmitButtonDisabled = false;
  public $sentenceCaseTitle;
  public $tera = 'tum-bbm';
  public $id;
  public $success = false;
  public $message = null;
  public $isOnUpdate = false;
  public $tanggalCekFisik;
  public $volumeRest;
  public $listVolume = [
    ['value' => 5000, 'text' => '5.000L'],
    ['value' => 8000, 'text' => '8.000L'],
    ['value' => 10000, 'text' => '10.000L'],
    ['value' => 16000, 'text' => '16.000L'],
    ['value' => 20000, 'text' => '20.000L'],
  ];
  public $listSatuan = [
    ['value' => 1, 'text' => '1 (satu)'],
    ['value' => 2, 'text' => '2 (dua)'],
  ];

  public AjukanTeraFormTumBbm $form;

  public function fillKendaraanToEmpty()
  {
    $this->form->volume = "";
    $this->form->kompartemen = "";
    $this->form->merek_kendaraan = "";
    $this->form->nomor_polisi = "";
    $this->form->nomor_rangka = "";
    $this->form->pemilik_stnk = "";
    $this->form->alamat_stnk = "";
  }
  public function fillPerusahaanToEmpty()
  {
    $this->form->alamat_skhp = '';
    $this->form->kelurahan_skhp = '';
    $this->form->kecamatan_skhp = '';
    $this->form->kota_skhp = '';
    $this->form->provinsi_skhp = '';
  }

  public function updatedIdPerusahaan()
  {
    // try {
    if ($this->idPerusahaan == '') {
      $this->fillPerusahaanToEmpty();
      $this->jenisDukungan = '';
    } else if ($this->idPerusahaan == 'isi-sendiri') {
      $this->jenisDukungan = 'non-subsidi';
      $this->fillPerusahaanToEmpty();
      $this->fillKendaraanToEmpty();
    } else {
      $this->jenisDukungan = 'subsidi';
      $this->idKendaraan = "";
      $this->fillKendaraanToEmpty();
      $perusahaan = Perusahaan::find($this->idPerusahaan);
      $this->form->alamat_skhp = $perusahaan->alamat_skhp;
      $this->form->kelurahan_skhp = $perusahaan->kelurahan_skhp;
      $this->form->kecamatan_skhp = $perusahaan->kecamatan_skhp;
      $this->form->kota_skhp = $perusahaan->kota_skhp;
      $this->form->provinsi_skhp = $perusahaan->provinsi_skhp;
      $this->opsiKendaraan = $perusahaan->kendaraan;
      if ($this->opsiKendaraan == null) $this->fillKendraanToEmpty();
    }
    // } catch (\Illuminate\Database\QueryException $e) {
    //   $this->showErrorAlert($e);
    // }
  }
  public function updatedIdKendaraan()
  {
    if ($this->idKendaraan == "") {
      $this->fillKendaraanToEmpty();
    } else {
      $kendaraan = $this->opsiKendaraan[$this->idKendaraan];
      $this->form->volume = $kendaraan->volume;
      $this->form->kompartemen = $kendaraan->kompartemen;
      $this->form->merek_kendaraan = $kendaraan->merek_kendaraan;
      $this->form->nomor_polisi = $kendaraan->nomor_polisi;
      $this->form->nomor_rangka = $kendaraan->nomor_rangka;
      $this->form->pemilik_stnk = $kendaraan->pemilik_stnk;
      $this->form->alamat_stnk = $kendaraan->alamat_stnk;
    }
  }

  public function setVolume()
  {
    $maxVolumePerDay = 25000;
    $totalVolume = Kendaraan::whereHas('teraJenisA', function ($query) {
      $query->whereDate('tanggal_cek_fisik', $this->tanggalCekFisik);
    })->sum('volume');
    $this->volumeRest =
      $this->isOnUpdate && $this->prevTanggalCekFisik == $this->tanggalCekFisik
      ? $maxVolumePerDay - ($totalVolume - $this->prevVolume)
      : $maxVolumePerDay - $totalVolume;

    if ($this->volumeRest >= 5000) {
      $this->isSubmitButtonDisabled = false;
    } else {
      $this->isSubmitButtonDisabled = true;
    }
  }

  public function updatedTanggalCekFisik()
  {
    $this->idPerusahaan = "";
    $this->idKendaraan = "";
    $this->setVolume();
  }

  private function getRandomCode(): string

  {
    $uuid = Uuid::uuid4();
    $uuidStr = $uuid->toString();
    $uuid10Digit = substr($uuidStr, -10);
    return strtoupper($uuid10Digit);
  }

  public function getMinimalCekFisik()
  {
    return Carbon::now()->addWeekdays(3)->format('Y-m-d');
  }

  public function downloadSuratPermohonan()
  {
    return Storage::download('public/' . $this->form->dokumen_surat_permohonan, "surat_permohonan_$this->id");
  }
  public function downloadStnk()
  {
    return Storage::download('public/' . $this->form->dokumen_stnk, "stnk_$this->id");
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
      'head_content' => "Tera TUM BBM anda jenis dukungan $this->jenisDukungan",
      'body_content' => 'Simpan kode pengajuan untuk diserahkan ke petugas. Tunggu dan pantau status pengajuan anda dalam halaman data tera sebelum pengujian tera anda dijadwalkan.',
    ]);
  }

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
    $rules = new AjukanTeraRulesTumBbm();
    $this->isSubmitButtonDisabled = true;
    try {
      $this->form->tanggal_cek_fisik = $this->tanggalCekFisik;
      $this->form->tanggal_pengujian = Carbon::parse($this->tanggalCekFisik)->subWeekdays(3)->format('Y-m-d');
      if ($this->jenisDukungan == 'subsidi') $this->form->nama_perusahaan = $this->idPerusahaan;
      $this->form->alamat_pengujian = $this->form->tempat_pengujian == 'di_kantor' ? 'Kantor Dinas Perdagangan Jalan Pangeran Suriansayah No. 05 Lokatabat Utara Banjarbaru' : $this->form->alamat_pengujian;
      $this->validate(
        $rules->getRules($this->jenisDukungan),
        $rules->getMessages(),
        $rules->getAttributes(),
      );
      $this->form->store($this->jenisDukungan, $this->idKendaraan != null ? $this->opsiKendaraan[$this->idKendaraan]->id : null);
      $this->showSuccessAlert();
    } catch (\Illuminate\Database\QueryException $e) {
      Storage::deleteDirectory('public/');
      $this->showErrorAlert($e);
    } finally {
      $this->isSubmitButtonDisabled = false;
    }
  }

  public function update()
  {
    $rules = new AjukanTeraRulesTumBbm();
    $this->isSubmitButtonDisabled = true;
    try {
      $this->form->tanggal_cek_fisik = $this->tanggalCekFisik;
      $this->form->tanggal_pengujian = Carbon::parse($this->tanggalCekFisik)->subWeekdays(3)->format('Y-m-d');
      if ($this->jenisDukungan == 'subsidi') $this->form->nama_perusahaan = $this->idPerusahaan;
      $this->form->alamat_pengujian = $this->form->tempat_pengujian == 'di_kantor' ? 'Kantor Dinas Perdagangan Jalan Pangeran Suriansayah No. 05 Lokatabat Utara Banjarbaru' : $this->form->alamat_pengujian;
      $this->validateFileReupload();
      $this->validate(
        $rules->getRulesWithoutFile(),
        $rules->getMessages(),
        $rules->getAttributes(),
      );
      $this->form->update($this->id, $this->opsiKendaraan[$this->idKendaraan]->id);
      Storage::deleteDirectory('public/');
      $this->showSuccessAlert();
    } catch (\Illuminate\Database\QueryException $e) {
      Storage::deleteDirectory('public/');
      $this->showErrorAlert($e);
    } finally {
      $this->isSubmitButtonDisabled = false;
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
    if ($this->form->file_dokumen_stnk != null) {
      $this->validate([
        'form.file_dokumen_stnk' => 'max:2048|mimes:pdf',
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




  public function mount()
  {

    $this->opsiPerusahaan = $this->isOnUpdate
      ? Perusahaan::select(['id', 'nama_perusahaan'])
      ->has('kendaraan')
      ->orderBy('nama_perusahaan')
      ->get()
      : Perusahaan::select(['id', 'nama_perusahaan'])
      ->where('jenis_dukungan', 'subsidi')
      ->has('kendaraan')
      ->orderBy('nama_perusahaan')
      ->get();

    $this->sentenceCaseTitle = "TUM BBM";
    if ($this->isOnUpdate) {
      $id = request()->query('id');
      $this->id = $id;
      $dataTera = TeraJenisA::find($id);
      $this->prevTanggalCekFisik = $dataTera->tanggal_cek_fisik;
      $this->prevNomorPolisi = $dataTera->kendaraan->nomor_polisi;
      $this->prevVolume = $dataTera->kendaraan->volume;
      $this->prevNamaPerusahaan = $dataTera->kendaraan->perusahaan->nama_perusahaan;
      $this->tanggalCekFisik = $dataTera->tanggal_cek_fisik;
      $this->idPerusahaan = $dataTera->kendaraan->perusahaan->id;
      $this->jenisDukungan = $dataTera->jenis_dukungan;
      $this->setVolume();
      $this->updatedIdPerusahaan();
      foreach ($this->opsiKendaraan as $index => $kendaraan) {
        if ($kendaraan->id == $dataTera->kendaraan->id) {
          $this->idKendaraan = $index;
          break;
        };
      }
      $this->updatedIdKendaraan();
      $this->form->setAndGetPropertiesFromTable($dataTera);
      dd($this->form->generateCodeForKodePengajuan());
    } else {
      $this->form->setProperties($this->getRandomCode());
    }
  }

  public function render()
  {
    return view('components.cards.card-form-tum-bbm');
  }
}
