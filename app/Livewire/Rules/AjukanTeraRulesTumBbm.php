<?php

namespace App\Livewire\Rules;

class AjukanTeraRulesTumBbm
{
  private $rules = [
    // 'form.keterangan' => 'required',
    // 'form.nama_pemohon' => 'required',
    // 'form.alamat_pemohon' => 'required',
    // 'form.nomor_kontak' => 'required',

    // 'form.nama_perusahaan' => 'required',
    // 'form.alamat_skhp' => 'required',
    // 'form.kelurahan_skhp' => 'required',
    // 'form.kecamatan_skhp' => 'required',
    // 'form.kota_skhp' => 'required',
    // 'form.provinsi_skhp' => 'required',

    // 'form.merek_kendaraan' => 'required',
    // 'form.nomor_polisi' => 'required',
    // 'form.nomor_rangka' => 'required',
    // 'form.pemilik_stnk' => 'required',
    // 'form.alamat_stnk' => 'required',

    // 'form.file_dokumen_surat_permohonan' => 'required',
    // 'form.file_dokumen_skhp_sebelumnya' => 'required',
    // 'form.file_dokumen_stnk' => 'required',
    // 'form.file_dokumen_bukti_pendukung_lainnya' => 'required',
    'form.nama_pemohon' => 'required',
    'form.alamat_pemohon' => 'required',
    'form.nomor_kontak' =>
    [
      'required',
      'regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/',
    ],
    'idPerusahaan' => 'required',
    'idKendaraan' => 'required',
    'form.nama_perusahaan' => 'required',
    'form.alamat_skhp' => 'required',
    'form.kelurahan_skhp' => 'required',
    'form.kecamatan_skhp' => 'required',
    'form.kota_skhp' => 'required',
    'form.provinsi_skhp' => 'required',

    'form.merek_kendaraan' => 'required',
    'form.nomor_polisi' => 'required',
    'form.nomor_rangka' => 'required',
    'form.pemilik_stnk' => 'required',
    'form.alamat_stnk' => 'required',

    'form.volume' => 'required',
    'form.kompartemen' => 'required',

    'form.lemping_volume_nominal' => 'required',
    'form.indeks_tera' => 'required',
    'form.merk_tum_bbm' => 'required',

    'form.status' => 'required',
    'form.keterangan' => 'required',

    'form.tanggal_cek_fisik' => 'required',
    'form.tempat_pengujian' => 'required',
    'form.alamat_pengujian' => 'required',

    'form.file_dokumen_surat_permohonan' => [
      'required',
      'max:2048',
      'mimes:pdf'
    ],
    'form.file_dokumen_stnk' =>
    [
      'required',
      'max:2048',
      'mimes:pdf'
    ],
    'form.file_dokumen_skhp_sebelumnya' =>
    [
      'required',
      'max:2048',
      'mimes:pdf'
    ],
    'form.file_dokumen_bukti_pendukung_lainnya' =>
    [
      'required',
      'max:2048',
      'mimes:pdf'
    ],
  ];

  private $messages = [
    'form.nomor_kontak.*' => 'Nomor Kontak wajib diisi dan sesuai format (08/+62)',
    'form.file_dokumen_surat_permohonan.*' => ':attribute wajib diisi dan file harus pdf dengan size maksimal 2MB',
    'form.file_dokumen_stnk.*' => ':attribute wajib diisi dan file harus pdf dengan size maksimal 2MB',
    'form.file_dokumen_skhp_sebelumnya.*' => ':attribute wajib diisi dan file harus pdf dengan size maksimal 2MB',
    'form.file_dokumen_bukti_pendukung_lainnya.*' => ':attribute wajib diisi dan file harus pdf dengan size maksimal 2MB',
    'required' => ':attribute wajib diisi',

  ];
  private $attributes = [
    'idPerusahaan' => 'Perusahaan',
    'idKendaraan' => 'Kendaraan',
    'form.provinsi_skhp' => 'Provinsi berdasarkan SKHP',
    'form.merek_kendaraan' => 'Merek Kendaraan',
    'form.nomor_polisi' => 'Nomor Polisi',
    'form.nomor_rangka' => 'Nomor Rangka',
    'form.pemilik_stnk' => 'Pemiliki berdasarkan STNK',
    'form.alamat_stnk' => 'Alamat berdasarkan SNTK',
    'form.volume' => 'Volume',
    'form.kompartemen' => 'Kompartemen',
    'form.lemping_volume_nominal' => 'Lemping Volume Nominal',
    'form.indeks_tera' => 'Indeks Tera',
    'form.merk_tum_bbm' => 'Merk TUM BBM',
    'form.tempat_pengujian' => 'Tempat Pengujian',
    'form.alamat_pengujian' => 'Alamat Pengujian',
    'form.tanggal_cek_fisik' => 'Tanggal Cek Fisik',
    'form.keterangan' => 'Keterangan',
    'form.status' => 'Status',
    'form.nama_pemohon' => 'Nama pemohon',
    'form.alamat_pemohon' => 'Alamat pemohon',
    'form.nama_perusahaan' => 'Nama berdasarkan SKHP',
    'form.alamat_skhp' => 'Alamat berdasarkan SKHP',
    'form.kelurahan_skhp' => 'Kelurahan berdasarkan SKHP',
    'form.kecamatan_skhp' => 'Kecamatan berdasarkan SKHP',
    'form.kota_skhp' => 'Kota berdasarkan SKHP',
    'form.nomor_kontak' => 'Nomor Kontak',
    'form.file_dokumen_surat_permohonan' => 'Surat Permohonan',
    'form.file_dokumen_stnk' => 'STNK',
    'form.file_dokumen_skhp_sebelumnya' => 'SKHP Sebelumnya',
    'form.file_dokumen_bukti_pendukung_lainnya' => 'Bukti Pendukung Lainnya',
  ];

  public function getRules($jenisDukungan)
  {
    $nonSubsidRules = [...$this->rules];
    unset($nonSubsidRules['idKendaraan']);
    unset($nonSubsidRules['idPerusahaan']);
    return $jenisDukungan == 'subsidi' ? $this->rules : $nonSubsidRules;
  }
  public function getRulesWithoutFile()
  {
    $newRules = [...$this->rules];
    unset($newRules['form.file_dokumen_surat_permohonan']);
    unset($newRules['form.file_dokumen_stnk']);
    unset($newRules['form.file_dokumen_skhp_sebelumnya']);
    unset($newRules['form.file_dokumen_bukti_pendukung_lainnya']);
    return $newRules;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function getAttributes()
  {
    return $this->attributes;
  }
}
