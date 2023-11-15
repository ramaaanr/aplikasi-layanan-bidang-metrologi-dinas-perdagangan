<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        "merek_kendaraan",
        "nomor_polisi",
        "nomor_rangka",
        "volume",
        "kompartemen",
        "pemilik_stnk",
        "alamat_stnk",
        "perusahaan_id",
        "tanggal_pengisian",
    ];
}
