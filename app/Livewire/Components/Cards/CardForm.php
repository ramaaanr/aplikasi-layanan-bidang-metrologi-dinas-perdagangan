<?php

namespace App\Livewire\Components\Cards;

use App\Livewire\Forms\AjukanTeraForm;
use Carbon\Carbon;
use Livewire\Component;
use Ramsey\Uuid\Nonstandard\Uuid;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;


class CardForm extends Component
{

  use WithFileUploads;

  public $isSubmitButtonDisabled = false;
  public $sentenceCaseTitle;
  public $tera;
  public $jenisUttp;
  public $success = false;
  public $message = null;


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


  public function showSuccessAlert()
  {
    session()->flash('success', $this->form->kode_pengajuan);
  }

  #[On('submit-uttp-fail')]
  public function showErrorAlert($e)
  {
    session()->flash('error', $e);
  }

  public function submit()
  {
    $this->isSubmitButtonDisabled = true;
    try {
      $this->dispatch('validate-uttp');
      $this->validate();
      $this->form->store();
      $this->dispatch('submit-uttp');
      $this->showSuccessAlert();
    } catch (\Illuminate\Database\QueryException $e) {
      $this->showErrorAlert($e);
    } catch (\Illuminate\Validation\ValidationException $e) {
      $this->isSubmitButtonDisabled = false;
      $this->validate();
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
    $this->jenisUttp = config("tera.$this->tera.jenis_uttp");
  }

  public function render()
  {
    return view('components.cards.card-form');
  }
}
