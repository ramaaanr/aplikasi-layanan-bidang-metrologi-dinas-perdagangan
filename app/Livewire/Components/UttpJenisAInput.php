<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Ramsey\Uuid\Nonstandard\Uuid;


class UttpJenisAInput extends Component
{

  public $index;

  #[Rule('required', message: 'Merk UTTP Wajib Diisi!')]
  public $merkUTTP = 'yamaha';

  #[Rule('required', message: 'Tipe/Model UTTP Wajib Diisi!')]
  public $tipeUTTP = 'Fire Fly';

  #[Rule('required', message: 'Nomor Seri UTTP Wajib Diisi!')]
  public $nomorSeriUTTP = "088";

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $kapasitasUTTP = 12;

  #[On('ajukan-tera-submited')]
  public function validateInput()
  {
    $this->validate();
  }

  public function render()
  {
    return view('components.uttp-jenis-a-input');
  }
}
