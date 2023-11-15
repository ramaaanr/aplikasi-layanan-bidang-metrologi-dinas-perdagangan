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

    public function getData()
    {
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
            ->paginate(20);
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



    public function render()
    {
        return view('components.cards.card-table-kendaraan', ['dataKendaraan' => $this->getData()]);
    }
}
