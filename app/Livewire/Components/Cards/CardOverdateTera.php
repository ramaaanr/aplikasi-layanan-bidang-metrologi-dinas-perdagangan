<?php

namespace App\Livewire\Components\Cards;

use App\Models\TeraJenisA;
use App\Models\TeraJenisB;
use App\Models\TeraJenisC;
use App\Models\TeraJenisD;
use Carbon\Carbon;
use Livewire\Component;

class CardOverdateTera extends Component
{
    public $jumlahTidakUpdate = [
        "tum-bbm" => 0,
        "timbangan-elektronik-kelas" => 0,
        "timbangan-jembatan" => 0,
        "timbangan-cepat" => 0,
        "timbangan-pegas" => 0,
        "timbangan-meja" => 0,
        "timbangan-bobot-ingsut" => 0,
        "timbangan-sentisimal" => 0,
        "pompa-ukur-bbm" => 0,
        "dacin" => 0,
        "neraca" => 0,
        "takaran-basah-kering" => 0,
        "meter-kayu" => 0,
    ];
    // public $jumlahTumBbmTidakUpdate;
    // public $jumlahTimbanganElektronikKelasTidakUpdate;
    // public $jumlahTimbanganJembatanTidakUpdate;
    // public $jumlahTimbanganCepatTidakUpdate;
    // public $jumlahTimbanganPegasTidakUpdate;
    // public $jumlahTimbanganMejaTidakUpdate;
    // public $jumlahTimbanganBobotIngsutTidakUpdate;
    // public $jumlahTimbanganSentisimalTidakUpdate;
    // public $jumlahPompaUkurBbmTidakUpdate;
    // public $jumlahDacinTidakUpdate;
    // public $jumlahNeracaTidakUpdate;
    // public $jumlahTakaranBasahKeringTidakUpdate;
    // public $jumlahMeterKayuTidakUpdate;

    public function setJumlahTidakUpdate()
    {
        $tera = array_keys(config('tera'));
        foreach ($tera as $jenisTera) {
            $model = config("tera.$jenisTera.model_tera");
            if ($jenisTera == 'tum-bbm') {
                $jumlah = $model::whereDate('tanggal_pengujian', '<', '2023-11-01')
                    ->whereIn('status', ['Dijadwalkan', 'Diajukan'])
                    ->count();
            } else {
                $jumlah = $model::where('jenis_tera', $jenisTera)
                    ->whereDate('tanggal_pengujian', '<', '2023-11-01')
                    ->whereIn('status', ['Dijadwalkan', 'Diajukan'])
                    ->count();
            }
            $this->jumlahTidakUpdate[$jenisTera] = $jumlah;
        }
    }

    public function mount()
    {
        $this->setJumlahTidakUpdate();
    }

    public function placeholder()
    {
        return view('components.cards.card-overdate-tera', ['loading' => true]);
    }

    public function render()
    {
        return view('components.cards.card-overdate-tera', ['loading' => false]);
    }
}
