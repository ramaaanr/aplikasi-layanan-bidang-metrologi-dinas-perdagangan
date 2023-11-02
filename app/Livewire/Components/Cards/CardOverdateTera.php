<?php

namespace App\Livewire\Components\Cards;

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

    public function formatString($tera)
    {
        $formattedString = str_replace('-', ' ', $tera);
        $formattedString = ucwords($formattedString);
        if (str_contains($formattedString, 'Bbm')) $formattedString = str_replace('Bbm', 'BBM', $formattedString);
        return $formattedString;
    }

    public function setJumlahTidakUpdate()
    {
        try {
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
        } catch (\Throwable $th) {
            dd($th);
        }
    }



    public function mount()
    {
        $this->setJumlahTidakUpdate();
    }

    public function placeholder()
    {
        return view('components.cards.card-overdate-tera-loading');
    }

    public function render()
    {
        return view('components.cards.card-overdate-tera', ['loading' => false]);
    }
}
