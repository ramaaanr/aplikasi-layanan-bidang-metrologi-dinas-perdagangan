<?php

namespace App\Livewire\Components\Cards;

use App\Models\Kendaraan;
use App\Models\Perusahaan;
use Livewire\Component;
use Livewire\WithPagination;

class CardTableKendaraan extends Component
{
    use WithPagination;

    public $query = "";
    public $queryCategory = "nomor_polisi";
    public $perusahaan = "";
    public $opsiPerusahaan;
    public $deletedId;

    public function delete($id)
    {
        $this->deletedId = $id;
    }

    public function updatedPerusahaan()
    {
        $this->resetPage();
        $this->render();
    }

    public function getData()
    {
        if ($this->perusahaan == "") {
            $data = Kendaraan::select(
                'id',
                'merek_kendaraan',
                'nomor_polisi',
                'volume',
                'kompartemen',
                'pemilik_stnk',
                'alamat_stnk',
                'tanggal_pengisian'
            )
                ->where("$this->queryCategory", 'LIKE', "%$this->query%")
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            $data = Kendaraan::select(
                'id',
                'merek_kendaraan',
                'nomor_polisi',
                'volume',
                'kompartemen',
                'pemilik_stnk',
                'alamat_stnk',
                'tanggal_pengisian'
            )
                ->where("$this->queryCategory", 'LIKE', "%$this->query%")
                ->where("perusahaan_id", $this->perusahaan)
                ->orderBy('id', 'desc')
                ->paginate(10);
        }

        return $data;
    }

    public function updatedQuery()
    {
        $this->resetPage();
        $this->render();
    }

    public function updatedQueryCategory()
    {
        $this->resetPage();
        $this->render();
    }

    public function placeholder()
    {
        return view('components.cards.card-loading-table-kendaraan');
    }

    public function mount()
    {
        try {
            $this->opsiPerusahaan = Perusahaan::select('id', 'nama_perusahaan')->get();
        } catch (\Throwable $th) {
            return redirect()->intended();
        }
    }



    public function render()
    {
        return view('components.cards.card-table-kendaraan', ['dataKendaraan' => $this->getData()]);
    }
}