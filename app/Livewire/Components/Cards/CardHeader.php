<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class CardHeader extends Component
{
  public $upperCaseTitle;
  public $tera;
  public $layanan;

  public function mount()
  {
    $words = explode('-', $this->tera);

    $sentenceCase = array_map(function ($word) {
      return strtoupper($word);
    }, $words);

    $this->upperCaseTitle = implode(' ', $sentenceCase);
  }

  public function render()
  {
    return view('components.cards.card-header');
  }
}
