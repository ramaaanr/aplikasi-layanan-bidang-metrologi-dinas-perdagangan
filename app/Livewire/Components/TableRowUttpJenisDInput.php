<?php

namespace App\Livewire\Components;

use App\Models\IdentitasUttpJenisD;
use App\Models\TeraJenisC;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;


class TableRowUttpJenisDInput extends Component
{

  public $index;
  public $kode_pengajuan;
  public $tera_jenis_c_id;

  #[Rule('required', message: 'Merk UTTP Wajib Diisi!')]
  public $merek = "Yamaha";

  #[Rule('required', message: 'Tipe/Model UTTP Wajib Diisi!')]
  public $tipe = 'Fire Fly';

  #[Rule('required', message: 'Nomor Seri UTTP Wajib Diisi!')]
  public $nomor_seri = "088";

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $kapasitas = "12";

  #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
  public $jenis = "basah";

  #[On('validate-uttp')]
  public function validateInput()
  {
    $this->validate();
  }

  #[On('submit-uttp')]
  public function submit()
  {
    $this->tera_jenis_c_id = TeraJenisC::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
    IdentitasUttpJenisD::create(
      $this->except(
        [
          'index',
          'kode_pengajuan',
        ]
      )
    );
  }


  public function render()
  {
    return view('components.table-row-uttp-jenis-d-input');
  }
}
