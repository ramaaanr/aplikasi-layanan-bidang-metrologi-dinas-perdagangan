<?php

namespace App\Livewire;

use Carbon\Carbon;
use Dompdf\Dompdf;
use Livewire\Component;

class PrintTeraTumBbmPreview extends Component
{
    public $tera;
    public $id;
    public $kode_pengajuan;
    public $no_surat;
    public $nama_pemohon;
    public $alamat_pemohon;
    public $nama_skhp;
    public $alamat_skhp;
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
    public $provinsi_skhp;
    public $kompartemen;
    public $volume;
    public $lemping_volume_nominal;
    public $indeks_tera;
    public $merk_tum_bbm;
    public $merek_kendaraan;
    public $nomor_polisi;
    public $nomor_rangka;
    public $pemilik_stnk;
    public $alamat_stnk;
    public $dokumen_stnk;
    public $tanggal_cek_fisik;

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

        $this->kode_pengajuan = $dataTera->kode_pengajuan;
        $this->no_surat = $dataTera->no_surat;
        $this->kode_pengajuan = $dataTera->kode_pengajuan;
        $this->nama_pemohon = $dataTera->nama_pemohon;
        $this->alamat_pemohon = $dataTera->alamat_pemohon;
        $this->nama_skhp = $dataTera->nama_skhp;
        $this->alamat_skhp = $dataTera->alamat_skhp;

        $this->provinsi_skhp = $dataTera->provinsi_skhp;
        $this->nomor_kontak = $dataTera->nomor_kontak;

        $this->volume = $dataTera->volume;
        $this->kompartemen = $dataTera->kompartemen;
        $this->lemping_volume_nominal = $dataTera->lemping_volume_nominal;
        $this->indeks_tera = $dataTera->indeks_tera;
        $this->merk_tum_bbm = $dataTera->merk_tum_bbm;

        $this->merek_kendaraan = $dataTera->merek_kendaraan;
        $this->nomor_polisi = $dataTera->nomor_polisi;
        $this->nomor_rangka = $dataTera->nomor_rangka;
        $this->pemilik_stnk = $dataTera->pemilik_stnk;
        $this->alamat_stnk = $dataTera->alamat_stnk;

        $this->dokumen_surat_permohonan = $dataTera->dokumen_surat_permohonan;
        $this->dokumen_stnk = $dataTera->dokumen_stnk;
        $this->dokumen_skhp_sebelumnya = $dataTera->dokumen_skhp_sebelumnya;
        $this->dokumen_bukti_pendukung_lainnya = $dataTera->dokumen_bukti_pendukung_lainnya;

        $this->status = $dataTera->status;
        $this->keterangan = $dataTera->keterangan;
        $this->tanggal_pengujian = $dataTera->tanggal_pengujian;
        $this->tanggal_cek_fisik = $dataTera->tanggal_cek_fisik;
        $this->tanggal_pengajuan = $dataTera->tanggal_pengajuan;
        $this->tempat_pengujian = $dataTera->tempat_pengujian;
        $this->alamat_pengujian = $dataTera->alamat_pengujian;
    }

    public function mount()
    {
        $id = request()->query('id');
        $this->getProps($id);
        $this->id = request()->query('id');
    }

    public function render()
    {
        return view('livewire.print-tera-tum-bbm-preview');
    }
}
