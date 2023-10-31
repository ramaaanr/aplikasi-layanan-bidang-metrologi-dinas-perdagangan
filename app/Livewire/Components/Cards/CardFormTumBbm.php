<?php

namespace App\Livewire\Components\Cards;

use Illuminate\Support\Facades\Storage;

use App\Livewire\Forms\AjukanTeraFormTumBbm;
use Carbon\Carbon;
use Livewire\Component;
use Ramsey\Uuid\Nonstandard\Uuid;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;


class CardFormTumBbm extends Component
{

  use WithFileUploads;

  public $isSubmitButtonDisabled = 'false';
  public $sentenceCaseTitle;
  public $tera = 'tum-bbm';
  public $id;
  public $success = false;
  public $message = null;
  public $isOnUpdate = false;

  public AjukanTeraFormTumBbm $form;


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
    session()->flash('success', $this->form->kode_pengajuan);
  }



  public function submit()
  {
    $this->isSubmitButtonDisabled = true;
    try {
      $this->dispatch('validate-uttp');
      $this->validate([
        'form.file_dokumen_surat_permohonan' => 'required|max:2048|mimes:pdf',
        'form.file_dokumen_stnk' => 'required|max:2048|mimes:pdf',
        'form.file_dokumen_skhp_sebelumnya' => 'required|max:2048|mimes:pdf',
        'form.file_dokumen_bukti_pendukung_lainnya' => 'required|max:2048|mimes:pdf',
      ]);
      $this->validate();
      $this->form->store();
      $this->showSuccessAlert();
    } catch (\Illuminate\Database\QueryException $e) {
      $this->showErrorAlert($e);
    } catch (\Illuminate\Validation\ValidationException $e) {
      $this->validate([
        'form.file_dokumen_surat_permohonan' => 'required|max:2048|mimes:pdf',
        'form.file_dokumen_skhp_sebelumnya' => 'required|max:2048|mimes:pdf',
        'form.file_dokumen_stnk' => 'required|max:2048|mimes:pdf',
        'form.file_dokumen_bukti_pendukung_lainnya' => 'required|max:2048|mimes:pdf',
      ]);
      $this->validate();
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


  public function update()
  {
    $this->isSubmitButtonDisabled = 'true';
    try {
      $this->validate();
      $this->validateFileReupload();
      $this->form->update($this->id);
      Storage::deleteDirectory('public/');
      $this->showSuccessAlert();
    } catch (\Illuminate\Database\QueryException $e) {
      Storage::deleteDirectory('public/');
      $this->showErrorAlert($e);
    } catch (\Illuminate\Validation\ValidationException $e) {
      $this->validateFileReupload();
      $this->validate();
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
    if ($this->isOnUpdate) {
      $id = request()->query('id');
      $this->id = $id;
      $this->form->setAndGetPropertiesFromTable($id);
    } else {
      $this->form->setProperties($this->getRandomCode());
    }
  }

  public function render()
  {
    return view('components.cards.card-form-tum-bbm');
  }
}
