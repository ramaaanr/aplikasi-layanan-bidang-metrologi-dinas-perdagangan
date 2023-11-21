<?php

namespace App\Livewire;

use Carbon\Carbon;
use Dompdf\Dompdf;
use Livewire\Component;

class PrintTeraPreview extends Component
{
    public $tera;
    public $id;
    public $jenis_uttp;
    public $identitas_uttp;
    public $kode_pengajuan;
    public $no_surat;
    public $jenis_tera;
    public $nama_pemohon;
    public $alamat_pemohon;
    public $nama_skhp;
    public $alamat_skhp;
    public $kelurahan_skhp;
    public $kecamatan_skhp;
    public $kota_skhp;
    public $nomor_kontak;
    public $dokumen_surat_permohonan;
    public $dokumen_skhp_sebelumnya;
    public $dokumen_bukti_pendukung_lainnya;
    public $status;
    public $keterangan;
    public $tanggal_pengujian;
    public $tanggal_pengajuan;
    public $tempat_pengujian;
    public $alamat_pengujian;
    public $jumlah_nozzle;
    public $jumlah_perlengkapan;
    public $jumlah_uttp;

    public function generateRomanNumberForPoint($point)
    {
        switch ($point) {
            case 'PEMOHON':
                return 'I';
            case 'SKHP ATAS NAMA':
                return 'II';
            case 'KELENGKAPAN DOKUMEN':
                return 'III';
            case 'JUMLAH UTTP':
                return 'IV';
            case 'JUMLAH NOZZLE':
                return 'V';
            case 'JUMLAH PERLENGKAPAN':
                return 'V';
            case 'IDENTITAS UTTP':
                return $this->getJenisTera() == 'tera_jenis_c' ? 'V' : 'VI';
            case 'TANGGAL PENGUJIAN':
                return $this->getJenisTera() == 'tera_jenis_c' ? 'VI' : 'VII';
            case 'INFORMASI LAINNYA':
                return $this->getJenisTera() == 'tera_jenis_c' ? 'VII' : 'VIII';
        }
    }

    public function getTeraUppercase()
    {
        $words = explode('-', $this->tera);

        $sentenceCase = array_map(function ($word) {
            return strtoupper($word);
        }, $words);

        return implode(' ', $sentenceCase);
    }

    public function getTanggalPengujian()
    {
        $tanggal = new Carbon($this->tanggal_pengujian);
        $tanggal->setLocale('id');
        return $tanggal->isoFormat('dddd, DD MMMM YYYY');
    }

    public function getTanggalSekarang()
    {
        $tanggal = new Carbon();
        $tanggal->setLocale('id');
        return $tanggal->isoFormat('DD MMMM YYYY');
    }

    public function getJenisTera()
    {
        return
            config("tera.$this->tera.jenis");
    }


    public function getModel()
    {
        return
            config("tera.$this->tera.model_tera");
    }

    public function getProps($id)
    {
        $dataTera = $this->getModel()::find($id);
        switch (config("tera.$this->tera.jenis_uttp")) {
            case 'uttp-jenis-a':
                $this->identitas_uttp = $dataTera->identitasUttpJenisA;
                break;
            case 'uttp-jenis-b':
                $this->identitas_uttp = $dataTera->identitasUttpJenisB;
                break;
            case 'uttp-jenis-c':
                $this->identitas_uttp = $dataTera->identitasUttpJenisC;
                break;
            case 'uttp-jenis-d':
                $this->identitas_uttp = $dataTera->identitasUttpJenisD;
                break;
            case 'uttp-jenis-e':
                $this->identitas_uttp = $dataTera->identitasUttpJenisE;
                break;
        }
        $this->kode_pengajuan = $dataTera->kode_pengajuan;
        $this->no_surat = $dataTera->no_surat;
        $this->jenis_tera = $dataTera->jenis_tera;
        $this->nama_pemohon = $dataTera->nama_pemohon;
        $this->alamat_pemohon = $dataTera->alamat_pemohon;
        $this->nama_skhp = $dataTera->nama_skhp;
        $this->alamat_skhp = $dataTera->alamat_skhp;
        $this->kelurahan_skhp = $dataTera->kelurahan_skhp;
        $this->kecamatan_skhp = $dataTera->kecamatan_skhp;
        $this->kota_skhp = $dataTera->kota_skhp;
        $this->nomor_kontak = $dataTera->nomor_kontak;
        $this->dokumen_surat_permohonan = $dataTera->dokumen_surat_permohonan;
        $this->dokumen_skhp_sebelumnya = $dataTera->dokumen_skhp_sebelumnya;
        $this->dokumen_bukti_pendukung_lainnya = $dataTera->dokumen_bukti_pendukung_lainnya;
        $this->jumlah_uttp = $dataTera->jumlah_uttp;
        if (isset($dataTera->jumlah_nozzle)) {
            $this->jumlah_nozzle = $dataTera->jumlah_nozzle;
        }
        if (isset($dataTera->jumlah_perlengkapan)) {
            $this->jumlah_perlengkapan = $dataTera->jumlah_perlengkapan;
        }
        $this->status = $dataTera->status;
        $this->keterangan = $dataTera->keterangan;
        $this->tanggal_pengujian = $dataTera->tanggal_pengujian;
        $this->tanggal_pengajuan = $dataTera->tanggal_pengajuan;
        $this->tempat_pengujian = $dataTera->tempat_pengujian;
        $this->alamat_pengujian = $dataTera->alamat_pengujian;
    }

    public function mount()
    {
        $id = request()->query('id');
        $this->getProps($id);
        $this->jenis_uttp = config("tera.$this->tera.jenis_uttp");
        $this->id = request()->query('id');
    }

    public function render()
    {
        return view('livewire.print-tera-preview');
    }
}