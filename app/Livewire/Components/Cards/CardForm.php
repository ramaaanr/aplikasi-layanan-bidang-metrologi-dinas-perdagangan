<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class CardForm extends Component
{
  public $sentenceCaseTitle;
  public $tera;

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
