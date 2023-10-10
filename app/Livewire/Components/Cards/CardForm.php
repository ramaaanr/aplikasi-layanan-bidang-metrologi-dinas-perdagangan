<?php

namespace App\Livewire\Components\Cards;

use App\Livewire\Forms\AjukanTeraForm;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Ramsey\Uuid\Nonstandard\Uuid;
use Livewire\Attributes\Rule;


class CardForm extends Component
{
  use WithFileUploads;

  public $sentenceCaseTitle;
  public $tera;
  public $success = false;
  public $message = null;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Surat Permohonan Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_surat_permohonan;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen SKHP Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_skhp_sebelumnya;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_bukti_pendukung_lainnya;

  public AjukanTeraForm $form;


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

  public function storeFiles()
  {
    $file_path_dokumen_bukti_pendukung_lainnya =
      $this->file_dokumen_bukti_pendukung_lainnya->store('dokumen_bukti_pendukung_lainnya');
    $file_path_dokumen_skhp_sebelumnya =
      $this->file_dokumen_skhp_sebelumnya->store('dokumen_skhp_sebelumnya');
    $file_path_dokumen_surat_permohonan =
      $this->file_dokumen_surat_permohonan->store('dokumen_surat_permohonan');

    $this->form->dokumen_bukti_pendukung_lainnya = $file_path_dokumen_bukti_pendukung_lainnya;
    $this->form->dokumen_skhp_sebelumnya = $file_path_dokumen_skhp_sebelumnya;
    $this->form->dokumen_surat_permohonan = $file_path_dokumen_surat_permohonan;
  }

  public function submit()
  {
    $this->dispatch('ajukan-tera-submited');
    $message = '';
    try {
      $this->storeFiles();
      $this->form->store();
      session()->flash('success', $this->form->kode_pengajuan);
    } catch (\Exception $e) {
      session()->flash('error');
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
    $this->form->setProperties($this->getRandomCode(), $this->tera);
  }

  public function render()
  {
    return view('components.cards.card-form');
  }
}
