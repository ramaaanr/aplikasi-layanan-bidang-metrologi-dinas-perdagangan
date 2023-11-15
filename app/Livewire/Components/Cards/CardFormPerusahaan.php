<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;
use App\Models\Perusahaan;
use Carbon\Carbon;
use Livewire\Attributes\Rule;

class CardFormPerusahaan extends Component
{
    public $id = '';
    public $isOnUpdate;
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

    public function submit()
    {
        $this->tanggal_pengisian = Carbon::now()->format('Y-m-d');
        $this->validate();
        Perusahaan::create($this->except(['isOnUpdate, id']));
        session()->flash('success');
    }

    public function update()
    {
        // try {
        $this->tanggal_pengisian = Carbon::now()->format('Y-m-d');
        $this->validate();
        Perusahaan::where('id', $this->id)->update([
            'nama_perusahaan' => $this->nama_perusahaan,
            'alamat_skhp' => $this->alamat_skhp,
            'kelurahan_skhp' => $this->kelurahan_skhp,
            'kecamatan_skhp' => $this->kecamatan_skhp,
            'kota_skhp' => $this->kota_skhp,
            'provinsi_skhp' => $this->provinsi_skhp,
            'tanggal_pengisian' => $this->tanggal_pengisian,
        ]);
        session()->flash('success');
        // } catch (\Illuminate\Database\QueryException $e) {
        // }
    }

    public function mount()
    {
        if ($this->isOnUpdate) {
            try {
                $this->id = request()->query('id');
                $perusahaan = Perusahaan::find($this->id);
                $this->nama_perusahaan = $perusahaan->nama_perusahaan;
                $this->alamat_skhp = $perusahaan->alamat_skhp;
                $this->kelurahan_skhp = $perusahaan->kelurahan_skhp;
                $this->kecamatan_skhp = $perusahaan->kecamatan_skhp;
                $this->kota_skhp = $perusahaan->kota_skhp;
                $this->provinsi_skhp = $perusahaan->provinsi_skhp;
            } catch (\Illuminate\Database\QueryException $e) {
                session()->flash('error');
            }
        }
    }
    public function render()
    {
        return view('components.cards.card-form-perusahaan');
    }
}
