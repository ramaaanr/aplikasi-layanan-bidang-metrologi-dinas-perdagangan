<?php

namespace App\Livewire\Components\Cards;

use App\Livewire\Forms\AjukanTeraForm;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class CardForm extends Component
{
  use WithFileUploads;

  public $sentenceCaseTitle;
  public $tera;
  public AjukanTeraForm $form;

  public function getTodayDate()
  {
    return Carbon::now()->format('Y-m-d');
  }

  public function submit()
  {
    $this->dispatch('ajukan-tera-submited');
    $this->validate();
    ddd($this->all());
  }

  public function mount()
  {
    $words = explode('-', $this->tera);

    $sentenceCase = array_map(function ($word) {
      if ($word == 'bbm') return 'BBM';
      return ucfirst($word);
    }, $words);
    $this->sentenceCaseTitle = implode(' ', $sentenceCase);
  }

  public function render()
  {
    return view('components.cards.card-form');
  }
}