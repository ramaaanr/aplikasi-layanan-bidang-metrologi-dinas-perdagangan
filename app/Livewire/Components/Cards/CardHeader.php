<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;

class CardHeader extends Component
{
  public $title;
  public $sentenceCaseTitle;
  public $name;
  public $page;

  public function mount()
  {
    $words = explode('-', $this->title);

    $sentenceCase = array_map(function ($word) {
      return strtoupper($word);
    }, $words);

    $this->sentenceCaseTitle = implode(' ', $sentenceCase);
  }

  public function render()
  {
    return view('components.cards.card-header');
  }
}
