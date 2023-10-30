<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tera extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'kode_pengajuan',
        'jenis_tera',
        'no_surat',
        'jumlah_uttp',
        'status',
        'tanggal_pengajuan',
        'keterangan',
        'nama_pemohon',
        'alamat_pemohon',
        'nama_skhp',
        'alamat_skhp',
        'kelurahan_skhp',
        'kecamatan_skhp',
        'kota_skhp',
        'nomor_kontak',
        'dokumen_surat_permohonan',
        'dokumen_skhp_sebelumnya',
        'dokumen_bukti_pendukung_lainnya',
        'tanggal_pengujian',
        'tempat_pengujian',
        'alamat_pengujian',
    ];
}
