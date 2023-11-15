<?php

namespace App\Livewire\Components\Cards;

use App\Models\Kendaraan;
use App\Models\Perusahaan;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\Attributes\Rule;

class CardFormKendaraan extends Component
{
    public $id = '';
    public $isOnUpdate;
    public $dataPerusahaan;
    #[Rule('required', message: 'Merek Kendaraan Wajib Diisi!')]
    public $merek_kendaraan;
    #[Rule('required', message: 'Nomor Polisi Wajib Diisi!')]
    public $nomor_polisi;
    #[Rule('required', message: 'Nomor Rangka Wajib Diisi!')]
    public $nomor_rangka;
    #[Rule('required', message: 'Volume Wajib Diisi!')]
    public $volume;
    #[Rule('required', message: 'Kompartemen Wajib Diisi!')]
    public $kompartemen;
    #[Rule('required', message: 'Pemilik STNK Wajib Diisi!')]
    public $pemilik_stnk;
    #[Rule('required', message: 'Alamat STNK Wajib Diisi!')]
    public $alamat_stnk;
    #[Rule('required', message: 'Perusahaan Wajib Diisi!')]
    public $perusahaan_id;
    public $tanggal_pengisian;

    public function submit()
    {
        try {
            $this->tanggal_pengisian = Carbon::now()->format('Y-m-d');
            $this->validate();
            Kendaraan::create($this->except(['isOnUpdate', 'id', 'dataPerusahaan',]));
            session()->flash('success');
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('error', ['message' => $e]);
        }
    }

    public function update()
    {
        try {
            $this->tanggal_pengisian = Carbon::now()->format('Y-m-d');
            $this->validate();
            Kendaraan::where('id', $this->id)->update($this->except(['isOnUpdate', 'id', 'dataPerusahaan',]));
            session()->flash('success');
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('error', ['message' => $e]);
        }
    }

    public function mount()
    {
        try {
            $this->dataPerusahaan = Perusahaan::select(['id', 'nama_perusahaan'])->orderBy('nama_perusahaan')->get();
            if ($this->isOnUpdate) {
                $this->id = request()->query('id');
                $kendaraan = Kendaraan::find($this->id);
                $this->merek_kendaraan = $kendaraan->merek_kendaraan;
                $this->nomor_polisi = $kendaraan->nomor_polisi;
                $this->nomor_rangka = $kendaraan->nomor_rangka;
                $this->volume = $kendaraan->volume;
                $this->kompartemen = $kendaraan->kompartemen;
                $this->pemilik_stnk = $kendaraan->pemilik_stnk;
                $this->alamat_stnk = $kendaraan->alamat_stnk;
                $this->perusahaan_id = $kendaraan->perusahaan_id;
            }
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('error', ['message' => $e]);
        }
    }

    public function render()
    {
        return view('components.cards.card-form-kendaraan');
    }
}
