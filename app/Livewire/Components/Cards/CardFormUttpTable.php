<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;
use Ramsey\Uuid\Nonstandard\Uuid;

class CardFormUttpTable extends Component
{
  public $jumlahUTTP = 1;

  public function render()
  {
    return view('components.cards.card-form-uttp-table');
  }
}