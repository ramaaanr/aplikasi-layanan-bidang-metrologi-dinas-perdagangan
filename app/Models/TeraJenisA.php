<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeraJenisA extends Tera
{

    protected $table = 'tera_jenis_a';

    protected $fillable = [
        "kode_pengajuan",
        "no_surat",
        "nama_pemohon",
        "alamat_pemohon",
        "nomor_kontak",
        "dokumen_surat_permohonan",
        "dokumen_stnk",
        "dokumen_skhp_sebelumnya",
        "dokumen_bukti_pendukung_lainnya",
        "lemping_volume_nominal",
        "indeks_tera",
        "merk_tum_bbm",
        "status",
        "jenis_dukungan",
        "keterangan",
        "admin_id",
        "kendaraan_id",
        "tanggal_pengujian",
        "tanggal_cek_fisik",
        "tanggal_pengajuan",
        "tempat_pengujian",
        "alamat_pengujian",
    ];

    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id', 'id');
    }
}
