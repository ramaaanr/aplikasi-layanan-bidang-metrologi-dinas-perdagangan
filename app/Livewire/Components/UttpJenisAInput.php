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
  public $merkUTTP;

  #[Rule('required', message: 'Tipe/Model UTTP Wajib Diisi!')]
  public $tipeUTTP;

  #[Rule('required', message: 'Nomor Seri UTTP Wajib Diisi!')]
  public $nomorSeriUTTP;

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $kapasitasUTTP;

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
