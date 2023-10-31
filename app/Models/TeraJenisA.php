<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeraJenisA extends Model
{

    protected $table = 'tera_jenis_a';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        "kode_pengajuan",
        "no_surat",
        "nama_pemohon",
        "alamat_pemohon",
        "nama_skhp",
        "alamat_skhp",
        "kelurahan_skhp",
        "kecamatan_skhp",
        "kota_skhp",
        "provinsi_skhp",
        "merek_kendaraan",
        "nomor_polisi",
        "nomor_rangka",
        "pemilik_stnk",
        "alamat_stnk",
        "nomor_kontak",
        "dokumen_surat_permohonan",
        "dokumen_stnk",
        "dokumen_skhp_sebelumnya",
        "dokumen_bukti_pendukung_lainnya",
        "volume",
        "kompartemen",
        "lemping_volume_nominal",
        "indeks_tera",
        "merk_tum_bbm",
        "status",
        "keterangan",
        "admin_id",
        "tanggal_pengujian",
        "tanggal_cek_fisik",
        "tanggal_pengajuan",
        "tempat_pengujian",
        "alamat_pengujian",
    ];
}
