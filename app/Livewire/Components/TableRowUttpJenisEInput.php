<?php

namespace App\Livewire\Components;

use App\Models\IdentitasUttpJenisE;
use App\Models\TeraJenisD;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TableRowUttpJenisEInput extends Component
{
    public $index;
    public $kode_pengajuan;
    public $tera_jenis_d_id;

    #[Rule('required', message: 'Merk UTTP Wajib Diisi!')]
    public $merek = "Yamaha";

    #[Rule('required', message: 'Tipe/Model UTTP Wajib Diisi!')]
    public $tipe = 'Fire Fly';

    #[Rule('required', message: 'Nomor Seri UTTP Wajib Diisi!')]
    public $nomor_seri = "088";

    #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
    public $kapasitas = "12";


    #[On('validate-uttp')]
    public function validateInput()
    {
        $this->validate();
    }

    #[On('submit-uttp')]
    public function submit()
    {
        $this->tera_jenis_d_id = TeraJenisD::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
        IdentitasUttpJenisE::create(
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
        return view('components.table-row-uttp-jenis-e-input');
    }
}
