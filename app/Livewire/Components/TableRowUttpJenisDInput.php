<?php

namespace App\Livewire\Components;

use App\Models\IdentitasUttpJenisD;
use App\Models\TeraJenisC;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;


class TableRowUttpJenisDInput extends TableRowUttp
{

  public $tera_jenis_c_id;

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $kapasitas = "";

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $jenis = "";


  #[On('submit-uttp')]
  public function submit()
  {
    $this->tera_jenis_c_id = TeraJenisC::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
    IdentitasUttpJenisD::create(
      $this->except(
        [
          ...$this->exceptProperties
        ]
      )
    );
  }

  #[On('update-uttp')]
  public function update()
  {
    $this->tera_jenis_c_id = TeraJenisC::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
    IdentitasUttpJenisD::where('id', $this->id)->update(
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
      $this->jenis = $modelUttp->jenis;
      $this->tera_jenis_c_id = $modelUttp->tera_jenis_c_id;
    }
  }


  public function render()
  {
    return view('components.table-row-uttp-jenis-d-input');
  }
}
