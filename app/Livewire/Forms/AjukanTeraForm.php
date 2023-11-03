<?php

namespace App\Livewire\Forms;

use App\Models\TeraJenisB;
use App\Models\TeraJenisC;
use App\Models\TeraJenisD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Form;


class AjukanTeraForm extends Form
{
  public $nonSavedProperties = [
    'nonSavedProperties',
    'file_dokumen_surat_permohonan',
    'file_dokumen_skhp_sebelumnya',
    'file_dokumen_bukti_pendukung_lainnya',
  ];

  public $no_surat = null;
  public $kode_pengajuan;
  public $jenis_tera;
  public $jumlah_uttp = 1;
  public $jumlah_perlengkapan = 1;
  public $jumlah_nozzle = 1;
  public $status = "Diajukan";
  public $tanggal_pengajuan;
  public $dokumen_surat_permohonan;
  public $dokumen_skhp_sebelumnya;
  public $dokumen_bukti_pendukung_lainnya;

  #[Rule('required', message: 'Keterangan Wajib Diisi!')]
  public $keterangan = "Tera anda sedang diajukan dan dipross sistem";

  #[Rule('required', message: 'Nama Pemohon Wajib Diisi!')]
  public $nama_pemohon = "";

  #[Rule('required', message: 'Alamat Pemohon Wajib Diisi!')]
  public $alamat_pemohon = '';

  #[Rule('required', message: 'SKHP atas Nama Wajib Diisi!')]
  public $nama_skhp = "";

  #[Rule('required', message: 'Alamat dalam SKHP Wajib Diisi!')]
  public $alamat_skhp = '';

  #[Rule('required', message: 'Alamat Kelurahan dalam SKHP Wajib Diisi!')]
  public $kelurahan_skhp = '';

  #[Rule('required', message: 'Alamat Kecamatan dalam SKHP Wajib Diisi!')]
  public $kecamatan_skhp = '';

  #[Rule('required', message: 'Alamat Kota dalam SKHP Wajib Diisi!')]
  public $kota_skhp = "Banjarbaru";

  #[Rule('required', message: 'Nomor Kontak Wajib Diisi!')]
  #[Rule('regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/', message: 'Format Nomor Tidak Sesuai')]
  public $nomor_kontak = '';

  // #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  // #[Rule('required', message: 'Upload Dokumen Surat Permohonan Wajib Diisi!')]
  // #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_surat_permohonan;

  // #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  // #[Rule('required', message: 'Upload Dokumen SKHP Wajib Diisi!')]
  // #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_skhp_sebelumnya;

  // #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  // #[Rule('required', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Diisi!')]
  // #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_bukti_pendukung_lainnya;


  #[Rule('required', message: 'Tanggal Pengujian Wajib Diisi!')]
  public $tanggal_pengujian = '';

  #[Rule('required', message: 'Tempat Pengujian Wajib Diisi!')]
  public $tempat_pengujian = 'di_kantor';

  #[Rule('required', message: 'Alamat Pengujian Wajib Diisi!')]
  public $alamat_pengujian = '';


  public function getModel()
  {
    return
      config("tera.$this->jenis_tera.model_tera");
  }

  public function storeFiles()
  {
    $file_path_dokumen_bukti_pendukung_lainnya =
      $this->file_dokumen_bukti_pendukung_lainnya->store('dokumen_bukti_pendukung_lainnya');
    $file_path_dokumen_skhp_sebelumnya =
      $this->file_dokumen_skhp_sebelumnya->store('dokumen_skhp_sebelumnya');
    $file_path_dokumen_surat_permohonan =
      $this->file_dokumen_surat_permohonan->store('dokumen_surat_permohonan');

    $this->dokumen_bukti_pendukung_lainnya = $file_path_dokumen_bukti_pendukung_lainnya;
    $this->dokumen_skhp_sebelumnya = $file_path_dokumen_skhp_sebelumnya;
    $this->dokumen_surat_permohonan = $file_path_dokumen_surat_permohonan;
  }


  public function setProperties($kode_pengajuan, $tera)
  {
    $this->kode_pengajuan = $kode_pengajuan;
    $this->jenis_tera = $tera;
    $this->tanggal_pengajuan = Carbon::now()->format('Y-m-d');
  }

  public function getTeraAttributes()
  {
    switch (config("tera.$this->jenis_tera.jenis")) {
      case 'tera_jenis_c':
        return [
          ...$this->nonSavedProperties,
          'jumlah_perlengkapan',
          'jumlah_nozzle'
        ];
      case 'tera_jenis_b':
        return [
          ...$this->nonSavedProperties, 'jumlah_perlengkapan',
        ];
      case 'tera_jenis_d':
        return [
          ...$this->nonSavedProperties,
          'jumlah_nozzle'
        ];
    }
  }

  public function setAndGetPropertiesFromTable($id)
  {
    $dataTera = $this->getModel()::find($id);
    $this->kode_pengajuan = $dataTera->kode_pengajuan;
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


    Storage::copy($this->dokumen_surat_permohonan, "public/$this->dokumen_surat_permohonan");
    Storage::copy($this->dokumen_skhp_sebelumnya, "public/$this->dokumen_skhp_sebelumnya");
    Storage::copy($this->dokumen_bukti_pendukung_lainnya, "public/$this->dokumen_bukti_pendukung_lainnya");

    // $this->file_dokumen_surat_permohonan = Storage::get('public/' . $this->dokumen_skhp_sebelumnya);

    $this->jumlah_uttp = $dataTera->jumlah_uttp;
    if (isset($dataTera->jumlah_nozzle)) {
      $this->jumlah_nozzle = $dataTera->jumlah_nozzle;
    }
    if (isset($dataTera->jumlah_perlengkapan)) {
      $this->jumlah_perlengkapan = $dataTera->jumlah_perlengkapan;
    }
    $this->status = $dataTera->status;
    $this->keterangan = $dataTera->keterangan;
    // $this->id_staff = $dataTera->id_staff;
    $this->tanggal_pengujian = $dataTera->tanggal_pengujian;
    $this->tanggal_pengajuan = $dataTera->tanggal_pengajuan;
    $this->tempat_pengujian = $dataTera->tempat_pengujian;
    $this->alamat_pengujian = $dataTera->alamat_pengujian;
    // dd($this->all());
  }

  public function store()
  {
    $this->storeFiles();
    $this->getModel()::create($this->except([...$this->getTeraAttributes()]));
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
    $countStatusTeraJenisB = TeraJenisB::where('status', 'Selesai')->whereYear('tanggal_pengujian', $year)->count();
    $countStatusTeraJenisC = TeraJenisC::where('status', 'Selesai')->whereYear('tanggal_pengujian', $year)->count();
    $countStatusTeraJenisD = TeraJenisD::where('status', 'Selesai')->whereYear('tanggal_pengujian', $year)->count();
    $noUrut = $countStatusTeraJenisB + $countStatusTeraJenisC + $countStatusTeraJenisD + 1;
    return "$noUrut/UPT.MET/$month/$year";
  }

  public function update($id)
  {
    if ($this->file_dokumen_surat_permohonan != null) {
      $file_path_dokumen_surat_permohonan =
        $this->file_dokumen_surat_permohonan->store('dokumen_surat_permohonan');
      $this->dokumen_surat_permohonan = $file_path_dokumen_surat_permohonan;
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

    $this->getModel()::where('id', $id)->update([...$this->except([...$this->getTeraAttributes()]), 'admin_id' => $this->getAdminId()]);
  }
}