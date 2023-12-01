<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;


class TableRowUttp extends Component
{
  public $index;
  public $isOnUpdate;
  public $kode_pengajuan;
  public $tera;
  public $id;
  public $exceptProperties = [
    'id',
    'index',
    'isOnUpdate',
    'kode_pengajuan',
    'exceptProperties',
    'tera',
  ];

  #[Rule('required', message: 'Merk UTTP Wajib Diisi!')]
  public $merek = "";

  #[Rule('required', message: 'Tipe/Model UTTP Wajib Diisi!')]
  public $tipe = '';

  #[Rule('required', message: 'Nomor Seri UTTP Wajib Diisi!')]
  public $nomor_seri = "";

  public function mount()
  {
    if ($this->isOnUpdate) {
      $modelUttp = config("tera.$this->tera.model_uttp")::find($this->id);
      $this->merek = $modelUttp->merek;
      $this->tipe = $modelUttp->tipe;
      $this->nomor_seri = $modelUttp->nomor_seri;
      return $modelUttp;
    }
  }


  #[On('validate-uttp')]
  public function validateInput()
  {
    $this->validate();
  }
}