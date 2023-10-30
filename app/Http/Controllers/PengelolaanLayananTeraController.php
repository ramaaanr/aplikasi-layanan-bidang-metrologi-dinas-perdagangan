<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PengelolaanLayananTeraController extends Controller
{
    public function index()
    {
        return view('admin.home', ['tera' => 'halaman-utama', 'layanan' => 'data-tera']);
    }

    public function showDataTera(String $tera)
    {
        return view('admin.data-tera', ['tera' => $tera, 'layanan' => 'data-tera']);
    }
    public function showUpdateTera(String $tera)
    {
        return view('admin.update-tera', ['tera' => $tera, 'layanan' => 'update-tera']);
    }

    public function cetakTera(Request $request, String $tera)
    {
        $dompdf = new Dompdf();
        $html = view('admin.cetak-tera', ['tera' => $tera]);
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        $options = $dompdf->getOptions();
        $options->setDefaultFont('Calibri');
        $dompdf->setOptions($options);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Dokumen Tera', ['Attachment' => false]);
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
}
