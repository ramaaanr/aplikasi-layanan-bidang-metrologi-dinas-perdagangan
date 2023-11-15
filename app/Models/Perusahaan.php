<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'nama_perusahaan',
        'alamat_skhp',
        'kelurahan_skhp',
        'kecamatan_skhp',
        'kota_skhp',
        'provinsi_skhp',
        'tanggal_pengisian',
    ];
}
