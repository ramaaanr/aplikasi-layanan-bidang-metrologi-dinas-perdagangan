<?php

namespace App\Livewire\Forms;

use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AjukanTeraForm extends Form
{

  public $kode_pengajuan;
  public $jenis_tera;
  public $jumlah_uttp = 1;
  public $status = "Diajukan";
  public $tanggal_pengajuan;
  public $keterangan = "Tera anda sedang diajukan dan diproses sistem";
  #[Rule('required', message: 'Nama Pemohon Wajib Diisi!')]
  public $nama_pemohon = "Alfi Tesumbalit";

  #[Rule('required', message: 'Alamat Pemohon Wajib Diisi!')]
  public $alamat_pemohon = 'jalan salto';

  #[Rule('required', message: 'SKHP atas Nama Wajib Diisi!')]
  public $nama_skhp = "Alfi tesumbalit";

  #[Rule('required', message: 'Alamat dalam SKHP Wajib Diisi!')]
  public $alamat_skhp = 'Jalan Salto';

  #[Rule('required', message: 'Alamat Kelurahan dalam SKHP Wajib Diisi!')]
  public $kelurahan_skhp = 'Kelurahan Socotra';

  #[Rule('required', message: 'Alamat Kecamatan dalam SKHP Wajib Diisi!')]
  public $kecamatan_skhp = 'Kecamatan Pluto';

  #[Rule('required', message: 'Alamat Kota dalam SKHP Wajib Diisi!')]
  public $kota_skhp = "Banjarbaru";

  #[Rule('required', message: 'Nomor Kontak Wajib Diisi!')]
  #[Rule('regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/', message: 'Format Nomor Tidak Sesuai')]
  public $nomor_kontak = '088245672170';

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Surat Permohonan Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $dokumen_surat_permohonan;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen SKHP Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $dokumen_skhp_sebelumnya;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $dokumen_bukti_pendukung_lainnya;


  #[Rule('required', message: 'Tanggal Pengujian Wajib Diisi!')]
  public $tanggal_pengujian = '2023-10-11';

  #[Rule('required', message: 'Tempat Pengujian Wajib Diisi!')]
  public $tempat_pengujian = 'di_kantor';

  #[Rule('required', message: 'Alamat Pengujian Wajib Diisi!')]
  public $alamat_pengujian = 'Kantor Dinas Perdagangan Jalan Pangeran Suriansayah No. 05 Lokatabat Utara Banjarbaru';

  public function setProperties($kode_pengajuan, $tera)
  {
    $this->kode_pengajuan = $kode_pengajuan;
    $this->jenis_tera = $tera;
    $this->tanggal_pengajuan = Carbon::now()->format('Y-m-d');
  }

  public function store()
  {
    $model = config("tera.$this->jenis_tera.model_tera");
    $model::create($this->all());
  }
}
