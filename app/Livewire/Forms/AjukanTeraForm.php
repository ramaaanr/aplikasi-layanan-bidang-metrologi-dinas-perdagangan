<?php

namespace App\Livewire\Forms;


use Livewire\Attributes\Rule;
use Livewire\Form;

class AjukanTeraForm extends Form
{
  // Properties for input form
  #[Rule('required', message: 'Nama Pemohon Wajib Diisi!')]
  public $namaPemohon;

  #[Rule('required', message: 'Alamat Pemohon Wajib Diisi!')]
  public $alamatPemohon;

  #[Rule('required', message: 'SKHP atas Nama Wajib Diisi!')]
  public $namaSKHP;

  #[Rule('required', message: 'Alamat dalam SKHP Wajib Diisi!')]
  public $alamatSKHP;

  #[Rule('required', message: 'Alamat Kelurahan dalam SKHP Wajib Diisi!')]
  public $kelurahanSKHP;

  #[Rule('required', message: 'Alamat Kecamatan dalam SKHP Wajib Diisi!')]
  public $kecamatanSKHP;

  #[Rule('required', message: 'Alamat Kota dalam SKHP Wajib Diisi!')]
  public $kotaSKHP = "Banjarbaru";

  #[Rule('required', message: 'Nomor Kontak Wajib Diisi!')]
  #[Rule('regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/', message: 'Format Nomor Tidak Sesuai')]
  public $nomorKontak;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Surat Permohonan Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $dokumenSuratPermohonan;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen SKHP Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $dokumenSkhpSebelumnya;

  #[Rule('mimes:pdf', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Dalam Format PDF!')]
  #[Rule('required', message: 'Upload Dokumen Bukti Pendukung Lainnya Wajib Diisi!')]
  #[Rule('max:2048', message: 'Upload Dokumen Bukti Pendukung Lainnya Maksimal Dengan Ukuran 2MB')]
  public $dokumenBuktiPendukungLainnya;

  #[Rule('required', message: 'Tanggal Pengujian Wajib Diisi!')]
  public $tanggalPengujian;

  #[Rule('required', message: 'Tempat Pengujian Wajib Diisi!')]
  public $tempatPengujian = 'di_kantor';

  #[Rule('required', message: 'Alamat Pengujian Wajib Diisi!')]
  public $alamatPengujian;
}