<?php

namespace App\Livewire;

use App\Models\Perusahaan;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Rule;

class DataAndTablePerusahaan extends Component
{
    #[Rule('required', message: 'Nama Perusahaan Wajib Diisi!')]
    public $nama_perusahaan;
    #[Rule('required', message: 'Alamat Perusahaan Wajib Diisi!')]
    public $alamat_skhp;
    #[Rule('required', message: 'Keluarahan Perusahaan Wajib Diisi!')]
    public $kelurahan_skhp;
    #[Rule('required', message: 'Kecamatan Perusahaan Wajib Diisi!')]
    public $kecamatan_skhp;
    #[Rule('required', message: 'Kota Perusahaan Wajib Diisi!')]
    public $kota_skhp;
    #[Rule('required', message: 'Provinsi Perusahaan Wajib Diisi!')]
    public $provinsi_skhp;
    public $tanggal_pengisian;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function submit()
    {
        $this->tanggal_pengisian = Carbon::now()->format('Y-m-d');
        try {
            $this->validate();
            Perusahaan::create($this->except(['listeners']));
            session()->flash('success', "Database bermasahal silahkan hubungi pihak IT");
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('error', "Database bermasahal silahkan hubungi pihak IT");
        } finally {
            $this->dispatch('refreshComponent');
        }
    }

    public function render()
    {
        return view('livewire.data-and-table-perusahaan');
    }
}
