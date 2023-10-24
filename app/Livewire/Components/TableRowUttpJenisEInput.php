<?php

namespace App\Livewire\Components;

use App\Models\IdentitasUttpJenisE;
use App\Models\TeraJenisD;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;

class TableRowUttpJenisEInput extends TableRowUttp
{
    public $tera_jenis_d_id;


    #[Rule('required', message: 'Kapasitas UTTP Wajib Diisi!')]
    public $kapasitas = "";



    #[On('submit-uttp')]
    public function submit()
    {
        $this->tera_jenis_d_id = TeraJenisD::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
        IdentitasUttpJenisE::create(
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
        $this->tera_jenis_d_id = TeraJenisD::where('kode_pengajuan', $this->kode_pengajuan)->value('id');
        IdentitasUttpJenisE::where('id', $this->id)->update(
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
            $this->tera_jenis_d_id = $modelUttp->tera_jenis_d_id;
        }
    }

    public function render()
    {
        return view('components.table-row-uttp-jenis-e-input');
    }
}
