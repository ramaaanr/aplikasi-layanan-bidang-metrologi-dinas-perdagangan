<?php

namespace App\Livewire\Forms;

use App\Models\TeraJenisA;
use App\Models\TeraJenisB;
use App\Models\TeraJenisC;
use App\Models\TeraJenisD;
use Carbon\Carbon;
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
  public $keterangan = "Tera anda sedang diajukan dan dipross sistem";

  // 🧑 Pemohon
  #[Rule('required', message: 'Nama Pemohon Wajib Diisi!')]
  public $nama_pemohon = "Alfi Pertalite";

  #[Rule('required', message: 'Alamat Pemohon Wajib Diisi!')]
  public $alamat_pemohon = 'Marabahan';

  // 🏭 SKHP
  #[Rule('required', message: 'SKHP atas Nama Wajib Diisi!')]
  public $nama_skhp = "PT Alfi Pertalite";

  #[Rule('required', message: 'Alamat dalam SKHP Wajib Diisi!')]
  public $alamat_skhp = 'Marabahan';

  #[Rule('required', message: 'Alamat Kelurahan dalam SKHP Wajib Diisi!')]
  public $kelurahan_skhp = 'Kel Marabahan';

  #[Rule('required', message: 'Alamat Kecamatan dalam SKHP Wajib Diisi!')]
  public $kecamatan_skhp = 'Kec Marabahan';

  #[Rule('required', message: 'Alamat Kota dalam SKHP Wajib Diisi!')]
  public $kota_skhp = "Kot marabahan";

  #[Rule('required', message: 'Alamat Provinsi dalam SKHP Wajib Diisi!')]
  public $provinsi_skhp = "Kalsel";

  // 🏍️ Data Kendaraan
  #[Rule('required', message: 'Merek Kendaraan Wajib Diisi!')]
  public $merek_kendaraan = "Vario 125";

  #[Rule('required', message: 'Nomor Polisi Wajib Diisi!')]
  public $nomor_polisi = "DA 13GHC MB";

  #[Rule('required', message: 'Nomor Rangka Wajib Diisi!')]
  public $nomor_rangka = "CHJX120";

  #[Rule('required', message: 'Nama Pemilik sesuai STNK  Wajib Diisi!')]
  public $pemilik_stnk = "Alfi Pertalite";

  #[Rule('required', message: 'Alamat sesuai STNK  Wajib Diisi!')]
  public $alamat_stnk = "Marabahan";

  #[Rule('required', message: 'Nomor Kontak Wajib Diisi!')]
  #[Rule('regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/', message: 'Format Nomor Tidak Sesuai')]
  public $nomor_kontak = '088245672160';

  public $file_dokumen_surat_permohonan;
  public $file_dokumen_skhp_sebelumnya;
  public $file_dokumen_stnk;
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
  public $tanggal_pengujian = '2023-11-11';

  #[Rule('required', message: 'Tanggal Cek Fisik Wajib Diisi!')]
  public $tanggal_cek_fisik = '2023-11-11';

  #[Rule('required', message: 'Tempat Pengujian Wajib Diisi!')]
  public $tempat_pengujian = 'di_kantor';

  #[Rule('required', message: 'Alamat Pengujian Wajib Diisi!')]
  public $alamat_pengujian = 'Kantor Dinas Perdagangan Jalan Pangeran Suriansayah No. 05 Lokatabat Utara Banjarbaru';


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


  // public function setAndGetPropertiesFromTable($id)
  // {
  //   $dataTera = $this->getModel()::find($id);
  //   $this->kode_pengajuan = $dataTera->kode_pengajuan;
  //   $this->nama_pemohon = $dataTera->nama_pemohon;
  //   $this->alamat_pemohon = $dataTera->alamat_pemohon;
  //   $this->nama_skhp = $dataTera->nama_skhp;
  //   $this->alamat_skhp = $dataTera->alamat_skhp;
  //   $this->kelurahan_skhp = $dataTera->kelurahan_skhp;
  //   $this->kecamatan_skhp = $dataTera->kecamatan_skhp;
  //   $this->kota_skhp = $dataTera->kota_skhp;
  //   $this->nomor_kontak = $dataTera->nomor_kontak;
  //   $this->dokumen_surat_permohonan = $dataTera->dokumen_surat_permohonan;
  //   $this->dokumen_skhp_sebelumnya = $dataTera->dokumen_skhp_sebelumnya;
  //   $this->dokumen_bukti_pendukung_lainnya = $dataTera->dokumen_bukti_pendukung_lainnya;


  //   Storage::copy($this->dokumen_surat_permohonan, "public/$this->dokumen_surat_permohonan");
  //   Storage::copy($this->dokumen_skhp_sebelumnya, "public/$this->dokumen_skhp_sebelumnya");
  //   Storage::copy($this->dokumen_bukti_pendukung_lainnya, "public/$this->dokumen_bukti_pendukung_lainnya");

  //   // $this->file_dokumen_surat_permohonan = Storage::get('public/' . $this->dokumen_skhp_sebelumnya);

  //   $this->jumlah_uttp = $dataTera->jumlah_uttp;
  //   if (isset($dataTera->jumlah_nozzle)) {
  //     $this->jumlah_nozzle = $dataTera->jumlah_nozzle;
  //   }
  //   if (isset($dataTera->jumlah_perlengkapan)) {
  //     $this->jumlah_perlengkapan = $dataTera->jumlah_perlengkapan;
  //   }
  //   $this->status = $dataTera->status;
  //   $this->keterangan = $dataTera->keterangan;
  //   // $this->id_staff = $dataTera->id_staff;
  //   $this->tanggal_pengujian = $dataTera->tanggal_pengujian;
  //   $this->tanggal_pengajuan = $dataTera->tanggal_pengajuan;
  //   $this->tempat_pengujian = $dataTera->tempat_pengujian;
  //   $this->alamat_pengujian = $dataTera->alamat_pengujian;
  //   // dd($this->all());
  // }

  public function store()
  {
    $this->storeFiles();
    TeraJenisA::create($this->except([...$this->nonSavedProperties]));
    // $this->getModel()::create($this->except([...$this->getTeraAttributes()]));
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

    // $this->getModel()::where('id', $id)->update([...$this->except([...$this->getTeraAttributes()]), 'admin_id' => $this->getAdminId()]);
  }
}
