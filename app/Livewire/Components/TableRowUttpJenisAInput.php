<?php

namespace App\Livewire\Components;

use App\Models\IdentitasUttpJenisA;
use App\Models\TeraJenisC;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;


class TableRowUttpJenisAInput extends TableRowUttp
{
  public $tera_jenis_c_id;

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $kapasitas = "";

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $kelas = "";

  #[On('submit-uttp')]
  public function submit()
  {
    $this->tera_jenis_c_id = TeraJenisC::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
    IdentitasUttpJenisA::create(
      $this->except(
        [
          ...$this->exceptProperties
        ]
      )
    );
  }

  #[On('update-uttp')]
  public function uttp()
  {
    $this->tera_jenis_c_id = TeraJenisC::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
    IdentitasUttpJenisA::where('id', $this->id)->update(
      $this->except(
        [
          ...$this->exceptProperties
        ]
      )
    );
  }

  public function mount()
  {
    if ($this->isOnUpdate) {
      $modelUttp = parent::mount();
      $this->kapasitas = $modelUttp->kapasitas;
      $this->kelas = $modelUttp->kelas;
      $this->tera_jenis_c_id = $modelUttp->tera_jenis_c_id;
    }
  }


  public function render()
  {
    return view('components.table-row-uttp-jenis-a-input');
  }
}