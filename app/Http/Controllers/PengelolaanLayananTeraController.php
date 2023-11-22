<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Perusahaan;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PengelolaanLayananTeraController extends Controller
{
    public function index()
    {
        return view('admin.home', ['tera' => null, 'layanan' => 'halaman-utama']);
    }

    public function deletePerusahaan(Request $request)
    {
        $id = $request->query('id');
        Perusahaan::find($id)->delete();
        return view('admin.data-perusahaan', ['tera' => 'data-perusahaan', 'layanan' => 'perusahaan']);
    }

    public function deleteKendaraan(Request $request)
    {
        $id = $request->query('id');
        Kendaraan::find($id)->delete();
        return view('admin.data-kendaraan', ['tera' => 'data-kendaraan', 'layanan' => 'kendaraan']);
    }

    public function showDataTera(String $tera)
    {
        return view('admin.data-tera', ['tera' => $tera, 'layanan' => 'data-tera']);
    }
    public function showDataKendaraan()
    {
        return view('admin.data-kendaraan', ['tera' => 'data-kendaraan', 'layanan' => 'kendaraan']);
    }
    public function showDataPerusahaan()
    {
        return view('admin.data-perusahaan', ['tera' => 'data-perusahaan', 'layanan' => 'perusahaan']);
    }
    public function showAjukanPerusahaan()
    {
        return view('admin.ajukan-perusahaan', ['tera' => 'data-perusahaan', 'layanan' => 'perusahaan', 'isOnUpdate' => false]);
    }
    public function showAjukanKendaraan()
    {
        return view('admin.ajukan-kendaraan', ['tera' => 'data-kendaraan', 'layanan' => 'kendaraan', 'isOnUpdate' => false]);
    }
    public function showUpdateKendaraan(Request $request)
    {
        $kendaraan = Kendaraan::find($request->query('id'));
        if (!$kendaraan) return redirect()->route('error-page');
        return view('admin.ajukan-kendaraan', ['tera' => 'data-kendaraan', 'layanan' => 'kendaraan', 'isOnUpdate' => true]);
    }
    public function showUpdatePerusahaan(Request $request)
    {
        $perusahaan = Perusahaan::find($request->query('id'));
        if (!$perusahaan) return redirect()->route('error-page');
        return view('admin.ajukan-perusahaan', ['tera' => 'data-perusahaan', 'layanan' => 'perusahaan', 'isOnUpdate' => true]);
    }
    public function showUpdateTera(Request $request, String $tera)
    {
        $id = $request->query('id');
        $model = config("tera.$tera.model_tera");
        $status = $model::find($id)->status;
        if ($status == 'Selesai') return redirect()->route('admin-data-tera', ['tera' => $tera, 'layanan' => 'data-tera']);
        return view('admin.update-tera', ['tera' => $tera, 'layanan' => 'update-tera']);
    }

    public function previewTera(Request $request, String $tera)
    {
        try {
            $model = config("tera.$tera.model_tera");
            $id = $request->query('id');
            $status = $model::find($id)->status;
            if ($status == 'Selesai') {
                return view('admin.cetak-tera', ['tera' => $tera, 'layanan' => 'cetak-tera']);
            } else {
                $message = [
                    'title' => 'Cetak Tera Gagal',
                    'header_content' => 'Gagal untuk melakukan cetak tera',
                    'body_content' => 'Dokumen tera yang akan dicetak belum selesai!',
                ];
                session()->flash('error', $message);
                return view('admin.data-tera', ['tera' => $tera, 'layanan' => 'data-tera']);
            }
        } catch (\Throwable $th) {
            // return redirect()->route('named_route', ['parameterKey' => 'value']);
            return redirect()->route('error-page', ['statusCode' => 404, 'message' => 'Dokumen tidak ditemukan']);
        }
    }

    public function getDataStatus(Request $request)
    {
        $dataStatus = [
            'diajukan' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            'dijadwalkan' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            'dibatalkan' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            'selesai' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],

        ];
        $tera = $request->query('tera');
        $model = config("tera.$tera.model_tera");
        $data = $model::selectRaw('MONTH(tanggal_pengujian) AS bulan')
            ->selectRaw('SUM(CASE WHEN Status = "Diajukan" THEN 1 ELSE 0 END) AS diajukan')
            ->selectRaw('SUM(CASE WHEN Status = "Dijadwalkan" THEN 1 ELSE 0 END) AS dijadwalkan')
            ->selectRaw('SUM(CASE WHEN Status = "Dibatalkan" THEN 1 ELSE 0 END) AS dibatalkan')
            ->selectRaw('SUM(CASE WHEN Status = "Selesai" THEN 1 ELSE 0 END) AS selesai')
            ->selectRaw('COUNT(*) AS jumlah')
            ->where('jenis_tera', $tera)
            ->whereYear('tanggal_pengujian', '2023')
            ->groupBy($model::raw('MONTH(tanggal_pengujian)'))
            ->orderBy('bulan')
            ->get();
        foreach ($data as $value) {
            $dataStatus['diajukan'][$value->bulan] = $value->diajukan;
            $dataStatus['dijadwalkan'][$value->bulan] = $value->dijadwalkan;
            $dataStatus['dibatalkan'][$value->bulan] = $value->dibatalkan;
            $dataStatus['selesai'][$value->bulan] = $value->selesai;
        }
        return response()->json($dataStatus);
    }
}
