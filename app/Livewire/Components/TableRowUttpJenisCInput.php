<?php

namespace App\Livewire\Components;

use App\Models\IdentitasUttpJenisC;
use App\Models\TeraJenisB;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;

class TableRowUttpJenisCInput extends TableRowUttp
{

    public $tera_jenis_b_id;


    #[Rule('required', message: 'Debit Maksimal Wajib Diisi!')]
    public $debit_maksimal = "";

    #[Rule('required', message: 'Media Wajib Diisi!')]
    public $media = "";

    #[Rule('required', message: 'Jumlah Nozzle wajib diisi')]
    public $jumlah_nozzle = "";



    #[On('submit-uttp')]
    public function submit()
    {
        $this->tera_jenis_b_id = TeraJenisB::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
        IdentitasUttpJenisC::create(
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
        $this->tera_jenis_b_id = TeraJenisB::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
        IdentitasUttpJenisC::where('id', $this->id)->update(
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
            $this->debit_maksimal = $modelUttp->debit_maksimal;
            $this->media = $modelUttp->media;
            $this->jumlah_nozzle = $modelUttp->jumlah_nozzle;
            $this->tera_jenis_b_id = $modelUttp->tera_jenis_b_id;
        }
    }

    public function render()
    {
        return view('components.table-row-uttp-jenis-c-input');
    }
}
