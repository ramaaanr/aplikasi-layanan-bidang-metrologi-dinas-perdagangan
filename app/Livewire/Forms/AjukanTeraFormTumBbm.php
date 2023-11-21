<?php

namespace App\Livewire\Forms;

use App\Models\Kendaraan;
use App\Models\Perusahaan;
use App\Models\TeraJenisA;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Form;


class AjukanTeraFormTumBbm extends Form
{
  public $nonSavedProperties = [
    'nonSavedProperties',
    'file_dokumen_surat_permohonan',
    'file_dokumen_stnk',
    'file_dokumen_skhp_sebelumnya',
    'file_dokumen_bukti_pendukung_lainnya',
  ];

  public $no_surat = null;
  public $kode_pengajuan;
  public $status = "Diajukan";
  public $tanggal_pengajuan;
  public $dokumen_surat_permohonan;
  public $dokumen_stnk;
  public $dokumen_skhp_sebelumnya;
  public $dokumen_bukti_pendukung_lainnya;

  #[Rule('required', message: 'Keterangan Wajib Diisi!')]
  public $keterangan = "Tera anda sedang diajukan dan diproses sistem";

  // 🧑 Pemohon
  #[Rule('required', message: 'Nama Pemohon Wajib Diisi!')]
  public $nama_pemohon = "";

  #[Rule('required', message: 'Alamat Pemohon Wajib Diisi!')]
  public $alamat_pemohon = '';

  // 🏭 SKHP
  #[Rule('required', message: 'SKHP atas Nama Wajib Diisi!')]
  public $nama_perusahaan = "";

  #[Rule('required', message: 'Alamat dalam SKHP Wajib Diisi!')]
  public $alamat_skhp = '';

  #[Rule('required', message: 'Alamat Kelurahan dalam SKHP Wajib Diisi!')]
  public $kelurahan_skhp = '';

  #[Rule('required', message: 'Alamat Kecamatan dalam SKHP Wajib Diisi!')]
  public $kecamatan_skhp = '';

  #[Rule('required', message: 'Alamat Kota dalam SKHP Wajib Diisi!')]
  public $kota_skhp = "";

  #[Rule('required', message: 'Alamat Provinsi dalam SKHP Wajib Diisi!')]
  public $provinsi_skhp = "";

  // 🏍️ Data Kendaraan
  #[Rule('required', message: 'Merek Kendaraan Wajib Diisi!')]
  public $merek_kendaraan = "";

  #[Rule('required', message: 'Nomor Polisi Wajib Diisi!')]
  public $nomor_polisi = "";

  #[Rule('required', message: 'Nomor Rangka Wajib Diisi!')]
  public $nomor_rangka = "";

  #[Rule('required', message: 'Nama Pemilik sesuai STNK  Wajib Diisi!')]
  public $pemilik_stnk = "";

  #[Rule('required', message: 'Alamat sesuai STNK  Wajib Diisi!')]
  public $alamat_stnk = "";

  #[Rule('required', message: 'Nomor Kontak Wajib Diisi!')]
  #[Rule('regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/', message: 'Format Nomor Tidak Sesuai')]
  public $nomor_kontak = '';

  #[Rule('required', message: 'Surat Permohonan wajib diisi dan file harus pdf dengan size maksimal 2MB')]
  public $file_dokumen_surat_permohonan;

  #[Rule('required', message: 'SKHP Sebelumnya wajib diisi dan file harus pdf dengan size maksimal 2MB')]
  public $file_dokumen_skhp_sebelumnya;

  #[Rule('required', message: 'STNK wajib diisi dan file harus pdf dengan size maksimal 2MB')]
  public $file_dokumen_stnk;

  #[Rule('required', message: 'Bukti Pendukung Lainnya wajib diisi dan file harus pdf dengan size maksimal 2MB')]
  public $file_dokumen_bukti_pendukung_lainnya;

  // 🥤Volume TUM BBM
  #[Rule('required', message: 'Volume  Wajib Diisi!')]
  public $volume = "5000";

  #[Rule('required', message: 'Kompartemen  Wajib Diisi!')]
  public $kompartemen = "1";

  // ✔️ Check Fisik TUM BBM
  #[Rule('required', message: 'Lemping Volume Nominal  Wajib Diisi!')]
  public $lemping_volume_nominal = false;
  #[Rule('required', message: 'Indeks Tera  Wajib Diisi!')]
  public $indeks_tera = false;
  #[Rule('required', message: 'Merk TUM  Wajib Diisi!')]
  public $merk_tum_bbm = false;


  // 📅 Tanggal
  #[Rule('required', message: 'Tanggal Pengujian Wajib Diisi!')]
  public $tanggal_pengujian = '';

  #[Rule('required', message: 'Tanggal Cek Fisik Wajib Diisi!')]
  public $tanggal_cek_fisik = '';

  #[Rule('required', message: 'Tempat Pengujian Wajib Diisi!')]
  public $tempat_pengujian = 'di_kantor';

  #[Rule('required', message: 'Alamat Pengujian Wajib Diisi!')]
  public $alamat_pengujian = '';


  public function storeFiles()
  {
    $file_path_dokumen_bukti_pendukung_lainnya =
      $this->file_dokumen_bukti_pendukung_lainnya->store('dokumen_bukti_pendukung_lainnya');
    $file_path_dokumen_stnk =
      $this->file_dokumen_stnk->store('dokumen_stnk');
    $file_path_dokumen_skhp_sebelumnya =
      $this->file_dokumen_skhp_sebelumnya->store('dokumen_skhp_sebelumnya');
    $file_path_dokumen_surat_permohonan =
      $this->file_dokumen_surat_permohonan->store('dokumen_surat_permohonan');
    $this->dokumen_bukti_pendukung_lainnya = $file_path_dokumen_bukti_pendukung_lainnya;
    $this->dokumen_skhp_sebelumnya = $file_path_dokumen_skhp_sebelumnya;
    $this->dokumen_stnk = $file_path_dokumen_stnk;
    $this->dokumen_surat_permohonan = $file_path_dokumen_surat_permohonan;
  }


  public function setProperties($kode_pengajuan)
  {
    $this->kode_pengajuan = $kode_pengajuan;
    $this->tanggal_pengajuan = Carbon::now()->format('Y-m-d');
  }


  public function setAndGetPropertiesFromTable($dataTera)
  {
    $kendaraan = $dataTera->kendaraan;
    $perusahaan = $kendaraan->perusahaan;
    $this->kode_pengajuan = $dataTera->kode_pengajuan;
    $this->nama_pemohon = $dataTera->nama_pemohon;
    $this->alamat_pemohon = $dataTera->alamat_pemohon;
    $this->nomor_kontak = $dataTera->nomor_kontak;

    $this->nama_perusahaan = $perusahaan->nama_perusahaan;
    $this->alamat_skhp = $perusahaan->alamat_skhp;
    $this->kelurahan_skhp = $perusahaan->kelurahan_skhp;
    $this->kecamatan_skhp = $perusahaan->kecamatan_skhp;
    $this->kota_skhp = $perusahaan->kota_skhp;
    $this->provinsi_skhp = $perusahaan->provinsi_skhp;

    $this->lemping_volume_nominal = $dataTera->lemping_volume_nominal == 1 ? true : false;
    $this->indeks_tera = $dataTera->indeks_tera  == 1 ? true : false;
    $this->merk_tum_bbm = $dataTera->merk_tum_bbm  == 1 ? true : false;

    $this->merek_kendaraan = $kendaraan->merek_kendaraan;
    $this->nomor_polisi = $kendaraan->nomor_polisi;
    $this->nomor_rangka = $kendaraan->nomor_rangka;
    $this->pemilik_stnk = $kendaraan->pemilik_stnk;
    $this->alamat_stnk = $kendaraan->alamat_stnk;
    $this->volume = $kendaraan->volume;
    $this->kompartemen = $kendaraan->kompartemen;

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



    Storage::copy($this->dokumen_surat_permohonan, "public/$this->dokumen_surat_permohonan");
    Storage::copy($this->dokumen_stnk, "public/$this->dokumen_stnk");
    Storage::copy($this->dokumen_skhp_sebelumnya, "public/$this->dokumen_skhp_sebelumnya");
    Storage::copy($this->dokumen_bukti_pendukung_lainnya, "public/$this->dokumen_bukti_pendukung_lainnya");
  }

  public function store($jenisDukungan, $idKendaraan = null)
  {
    $this->storeFiles();
    if ($jenisDukungan == 'non-subsidi') {
      $perusahaan = new Perusahaan();
      $perusahaan->nama_perusahaan = $this->nama_perusahaan;
      $perusahaan->alamat_skhp = $this->alamat_skhp;
      $perusahaan->kelurahan_skhp = $this->kelurahan_skhp;
      $perusahaan->kecamatan_skhp = $this->kecamatan_skhp;
      $perusahaan->kota_skhp = $this->kota_skhp;
      $perusahaan->provinsi_skhp = $this->provinsi_skhp;
      $perusahaan->tanggal_pengisian = $this->tanggal_pengajuan;
      $perusahaan->jenis_dukungan = $jenisDukungan;
      $perusahaan->save();
      $perusahaanId = $perusahaan->id;
      $kendaraan = new Kendaraan();
      $kendaraan->merek_kendaraan = $this->merek_kendaraan;
      $kendaraan->nomor_polisi = $this->nomor_polisi;
      $kendaraan->nomor_rangka = $this->nomor_rangka;
      $kendaraan->volume = $this->volume;
      $kendaraan->kompartemen = $this->kompartemen;
      $kendaraan->pemilik_stnk = $this->pemilik_stnk;
      $kendaraan->alamat_stnk = $this->alamat_stnk;
      $kendaraan->perusahaan_id = $perusahaanId;
      $kendaraan->save();
      $idKendaraan = $kendaraan->id;
    }
    $tera = new TeraJenisA();
    $tera->kode_pengajuan = $this->kode_pengajuan;
    $tera->no_surat = $this->no_surat;
    $tera->nama_pemohon = $this->nama_pemohon;
    $tera->alamat_pemohon = $this->alamat_pemohon;
    $tera->nomor_kontak = $this->nomor_kontak;
    $tera->dokumen_surat_permohonan = $this->dokumen_surat_permohonan;
    $tera->dokumen_stnk = $this->dokumen_stnk;
    $tera->dokumen_skhp_sebelumnya = $this->dokumen_skhp_sebelumnya;
    $tera->dokumen_bukti_pendukung_lainnya = $this->dokumen_bukti_pendukung_lainnya;
    $tera->lemping_volume_nominal = $this->lemping_volume_nominal;
    $tera->indeks_tera = $this->indeks_tera;
    $tera->merk_tum_bbm = $this->merk_tum_bbm;
    $tera->status = $this->status;
    $tera->keterangan = $this->keterangan;
    $tera->kendaraan_id = $idKendaraan;
    $tera->tanggal_pengujian = $this->tanggal_pengujian;
    $tera->tanggal_cek_fisik = $this->tanggal_cek_fisik;
    $tera->tanggal_pengajuan = $this->tanggal_pengajuan;
    $tera->tempat_pengujian = $this->tempat_pengujian;
    $tera->alamat_pengujian = $this->alamat_pengujian;

    $tera->save();
  }

  private function getAdminId()
  {
    $session = session()->get('admin');
    return $session['id'];
  }

  public function generateCodeForKodePengajuan()
  {
    Carbon::setlocale('id');
    $month = Carbon::now()->isoFormat('MMMM');
    $year = Carbon::now()->isoFormat('YYYY');
    $noUrut = TeraJenisA::where('status', 'Selesai')->whereYear('tanggal_pengujian', $year)->count() + 1;
    return "$noUrut/UPT.MET/$month/$year";
  }

  public function update($id, $idKendaraan)
  {
    if ($this->file_dokumen_surat_permohonan != null) {
      $file_path_dokumen_surat_permohonan =
        $this->file_dokumen_surat_permohonan->store('dokumen_surat_permohonan');
      $this->dokumen_surat_permohonan = $file_path_dokumen_surat_permohonan;
    }
    if ($this->file_dokumen_stnk != null) {
      $file_path_dokumen_stnk =
        $this->file_dokumen_stnk->store('dokumen_stnk');
      $this->dokumen_stnk = $file_path_dokumen_stnk;
    }
    if ($this->file_dokumen_bukti_pendukung_lainnya != null) {
      $file_path_dokumen_bukti_pendukung_lainnya =
        $this->file_dokumen_bukti_pendukung_lainnya->store('dokumen_bukti_pendukung_lainnya');
      $this->dokumen_bukti_pendukung_lainnya = $file_path_dokumen_bukti_pendukung_lainnya;
    }
    if ($this->file_dokumen_skhp_sebelumnya != null) {
      $file_path_dokumen_skhp_sebelumnya =
        $this->file_dokumen_skhp_sebelumnya->store('dokumen_skhp_sebelumnya');
      $this->dokumen_skhp_sebelumnya = $file_path_dokumen_skhp_sebelumnya;
    }

    $this->no_surat =  $this->status == "Selesai" ? $this->generateCodeForKodePengajuan() : null;

    $tera = TeraJenisA::find($id);
    $tera->no_surat = $this->no_surat;
    $tera->nama_pemohon = $this->nama_pemohon;
    $tera->alamat_pemohon = $this->alamat_pemohon;
    $tera->nomor_kontak = $this->nomor_kontak;
    $tera->dokumen_surat_permohonan = $this->dokumen_surat_permohonan;
    $tera->dokumen_stnk = $this->dokumen_stnk;
    $tera->dokumen_skhp_sebelumnya = $this->dokumen_skhp_sebelumnya;
    $tera->dokumen_bukti_pendukung_lainnya = $this->dokumen_bukti_pendukung_lainnya;
    $tera->lemping_volume_nominal = $this->lemping_volume_nominal;
    $tera->indeks_tera = $this->indeks_tera;
    $tera->merk_tum_bbm = $this->merk_tum_bbm;
    $tera->status = $this->status;
    $tera->keterangan = $this->keterangan;
    $tera->kendaraan_id = $idKendaraan;
    $tera->tanggal_pengujian = $this->tanggal_pengujian;
    $tera->tanggal_cek_fisik = $this->tanggal_cek_fisik;
    $tera->tanggal_pengajuan = $this->tanggal_pengajuan;
    $tera->tempat_pengujian = $this->tempat_pengujian;
    $tera->alamat_pengujian = $this->alamat_pengujian;
    $tera->lemping_volume_nominal = $this->lemping_volume_nominal;
    $tera->indeks_tera = $this->indeks_tera;
    $tera->merk_tum_bbm = $this->merk_tum_bbm;
    $tera->admin_id = $this->getAdminId();
    $tera->save();
  }
}
