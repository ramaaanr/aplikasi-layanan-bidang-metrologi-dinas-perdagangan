<?php

namespace App\Livewire\Components\Cards;

use App\Models\TeraJenisC;
use Livewire\Component;

class CardChartTera extends Component
{
    public $dataDiajukan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    public $dataDijadwalkan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    public $dataDibatalkan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    public $dataSelesai = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    public function getData()
    {
        $model = new TeraJenisC();
        $data = $model::selectRaw('MONTH(tanggal_pengujian) AS bulan')
            ->selectRaw('SUM(CASE WHEN Status = "Diajukan" THEN 1 ELSE 0 END) AS diajukan')
            ->selectRaw('SUM(CASE WHEN Status = "Dijadwalkan" THEN 1 ELSE 0 END) AS dijadwalkan')
            ->selectRaw('SUM(CASE WHEN Status = "Dibatalkan" THEN 1 ELSE 0 END) AS dibatalkan')
            ->selectRaw('SUM(CASE WHEN Status = "Selesai" THEN 1 ELSE 0 END) AS selesai')
            ->selectRaw('COUNT(*) AS jumlah')
            ->where('jenis_tera', 'meter-kayu')
            ->whereYear('tanggal_pengujian', '2023')
            ->groupBy($model::raw('MONTH(tanggal_pengujian)'))
            ->orderBy('bulan')
            ->get();

        foreach ($data as $value) {
            $this->dataDiajukan[$value->bulan] = $value->diajukan;
            $this->dataDijadwalkan[$value->bulan] = $value->dijadwalkan;
            $this->dataDibatalkan[$value->bulan] = $value->dibatalkan;
            $this->dataSelesai[$value->bulan] = $value->selesai;
        }
    }
    public function mount()
    {
        $this->getData();
    }
    public function render()
    {
        return view('components.cards.card-chart-tera');
    }
}