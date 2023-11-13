<?php

namespace App\Livewire\Rules;




class AjukanTeraRules
{
  private $rules = [
    'form.keterangan' => 'required',
    'form.nama_pemohon' => 'required',
    'form.alamat_pemohon' => 'required',
    'form.nama_skhp' => 'required',
    'form.alamat_skhp' => 'required',
    'form.kelurahan_skhp' => 'required',
    'form.kecamatan_skhp' => 'required',
    'form.kota_skhp' => 'required',
    'form.nomor_kontak' => [
      'required',
      'regex:/^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/',
    ],
    'form.tanggal_pengujian' => 'required',
    'form.tempat_pengujian' => 'required',
    'form.alamat_pengujian' => 'required',
    'form.file_dokumen_surat_permohonan' => 'required|max:2048|mimes:pdf',
    'form.file_dokumen_skhp_sebelumnya' => 'required|max:2048|mimes:pdf',
    'form.file_dokumen_bukti_pendukung_lainnya' => 'required|max:2048|mimes:pdf',
  ];
  private $messages = [
    'form.tanggal_pengujian.*' => 'Tanggal Wajib diisi dan Tanggal yang dipilih jatuh pada hari kerja',
    'form.nomor_kontak.*' => 'Nomor Kontak wajib diisi dan sesuai format (08/+62)',
    'form.file_dokumen_surat_permohonan.*' => ':attribute wajib diisi dan file harus pdf dengan size maksimal 2MB',
    'form.file_dokumen_skhp_sebelumnya.*' => ':attribute wajib diisi dan file harus pdf dengan size maksimal 2MB',
    'form.file_dokumen_bukti_pendukung_lainnya.*' => ':attribute wajib diisi dan file harus pdf dengan size maksimal 2MB',
    'required' => ':attribute wajib diisi',

  ];
  private $attributes = [
    'form.keterangan' => 'Keterangan',
    'form.nama_pemohon' => 'Nama pemohon',
    'form.alamat_pemohon' => 'Alamat pemohon',
    'form.nama_skhp' => 'Nama berdasarkan SKHP',
    'form.alamat_skhp' => 'Alamat berdasarkan SKHP',
    'form.kelurahan_skhp' => 'Kelurahan berdasarkan SKHP',
    'form.kecamatan_skhp' => 'Kecamatan berdasarkan SKHP',
    'form.kota_skhp' => 'Kota berdasarkan SKHP',
    'form.nomor_kontak' => 'Nomor Kontak',
    'form.tanggal_pengujian' => 'Tanggal Pengujian',
    'form.tempat_pengujian' => 'Tempat Pengujian',
    'form.alamat_pengujian' => 'Alamat Pengujian',
    'form.file_dokumen_surat_permohonan' => 'Surat Permohonan',
    'form.file_dokumen_skhp_sebelumnya' => 'SKHP Sebelumnya',
    'form.file_dokumen_bukti_pendukung_lainnya' => 'Bukti Pendukung Lainnya',
  ];

  public function getRules()
  {
    return $this->rules;
  }
  public function getRulesWithoutFile()
  {
    $newRules = [...$this->rules];
    unset($newRules['form.file_dokumen_surat_permohonan']);
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
