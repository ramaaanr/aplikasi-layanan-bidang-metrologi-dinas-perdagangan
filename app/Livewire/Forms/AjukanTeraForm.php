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
  public $jumlah_perlengkapan = 1;
  public $jumlah_nozzle = 2;
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

  public $dokumen_surat_permohonan;

  public $dokumen_skhp_sebelumnya;

  public $dokumen_bukti_pendukung_lainnya;


  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Surat Permohonan Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_surat_permohonan;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen SKHP Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_skhp_sebelumnya;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $file_dokumen_bukti_pendukung_lainnya;


  #[Rule('required', message: 'Tanggal Pengujian Wajib Diisi!')]
  public $tanggal_pengujian = '2023-10-15';

  #[Rule('required', message: 'Tempat Pengujian Wajib Diisi!')]
  public $tempat_pengujian = 'di_kantor';

  #[Rule('required', message: 'Alamat Pengujian Wajib Diisi!')]
  public $alamat_pengujian = 'Kantor Dinas Perdagangan Jalan Pangeran Suriansayah No. 05 Lokatabat Utara Banjarbaru';


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

  public function store()
  {
    $file_atribute = [
      'file_dokumen_surat_permohonan',
      'file_dokumen_skhp_sebelumnya',
      'file_dokumen_bukti_pendukung_lainnya',
    ];
    $this->storeFiles();
    $model = config("tera.$this->jenis_tera.model_tera");
    switch (config("tera.$this->jenis_tera.jenis")) {
      case 'tera_jenis_c':
        $model::create($this->except([
          ...$file_atribute,
          'jumlah_perlengkapan',
        ]));
        break;
      case 'tera_jenis_b':
        $model::create($this->except([
          ...$file_atribute, 'jumlah_perlengkapan',
        ]));
        break;
      case 'tera_jenis_d':
        $model::create($this->except([
          ...$file_atribute,
        ]));
        break;
      default:
        # code...
        break;
    }
  }
}
