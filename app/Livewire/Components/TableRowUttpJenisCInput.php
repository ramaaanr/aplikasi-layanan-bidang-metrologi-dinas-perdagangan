<?php

namespace App\Livewire\Components;

use App\Models\IdentitasUttpJenisC;
use App\Models\TeraJenisB;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TableRowUttpJenisCInput extends Component
{
    public $index;
    public $kode_pengajuan;
    public $tera_jenis_b_id;

    #[Rule('required', message: 'Merk UTTP Wajib Diisi!')]
    public $merek = "Yamaha";

    #[Rule('required', message: 'Tipe/Model UTTP Wajib Diisi!')]
    public $tipe = 'Fire Fly';

    #[Rule('required', message: 'Nomor Seri UTTP Wajib Diisi!')]
    public $nomor_seri = "088";

    #[Rule('required', message: 'Debit Maksimal Wajib Diisi!')]
    public $debit_maksimal = "12";

    #[Rule('required', message: 'Media Wajib Diisi!')]
    public $media = "sctv";

    #[Rule('required', message: 'Jumlah Nozzle wajib diisi')]
    public $jumlah_nozzle = "123";


    #[On('validate-uttp')]
    public function validateInput()
    {
        $this->validate();
    }

    #[On('submit-uttp')]
    public function submit()
    {
        $this->tera_jenis_b_id = TeraJenisB::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
        IdentitasUttpJenisC::create(
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
        return view('components.table-row-uttp-jenis-c-input');
    }
}
