<?php

namespace Tests\Feature;

use App\Models\TeraJenisA;
use App\Models\TeraJenisB;
use App\Models\TeraJenisC;
use App\Models\TeraJenisD;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateNoSurat extends TestCase
{

    private function getRomanNumber($bulan)
    {
        switch ($bulan) {
            case 1:
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }

    public function generateCodeForKodePengajuan()
    {
        Carbon::setlocale('id');
        $month = Carbon::now()->isoFormat('mm');
        $year = Carbon::now()->isoFormat('YYYY');
        $countStatusTeraJenisB = TeraJenisB::where('status', 'Selesai')->whereYear('tanggal_pengujian', $year)->count();
        $countStatusTeraJenisC = TeraJenisC::where('status', 'Selesai')->whereYear('tanggal_pengujian', $year)->count();
        $countStatusTeraJenisD = TeraJenisD::where('status', 'Selesai')->whereYear('tanggal_pengujian', $year)->count();
        $noUrut = $countStatusTeraJenisB + $countStatusTeraJenisC + $countStatusTeraJenisD + 1;
        return "$noUrut/UPT.MET/$month/$year";
    }

    public function testCreateNoSuratForTeraSuccess(): void
    {
        self::assertEquals($this->generateCodeForKodePengajuan(), 'udin');
    }
}
