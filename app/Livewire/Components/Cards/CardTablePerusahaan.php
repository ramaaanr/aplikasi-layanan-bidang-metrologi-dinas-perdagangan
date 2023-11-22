<?php

namespace App\Livewire\Components\Cards;

use App\Models\Perusahaan;
use Livewire\Component;
use Livewire\WithPagination;

class CardTablePerusahaan extends Component
{
    use WithPagination;

    public $query = "";
    public $queryCategory = "nama_perusahaan";
    public $deletedId;

    public function delete($id)
    {
        $this->deletedId = $id;
    }

    public function getTeraData()
    {
        $data = Perusahaan::select('id', 'nama_perusahaan', 'alamat_skhp', 'jenis_dukungan', 'kota_skhp', 'provinsi_skhp', 'tanggal_pengisian',)
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
        return view('components.cards.card-loading-table-perusahaan');
    }



    public function render()
    {
        return view('components.cards.card-table-perusahaan', ['dataPerusahaan' => $this->getTeraData()]);
    }
}
