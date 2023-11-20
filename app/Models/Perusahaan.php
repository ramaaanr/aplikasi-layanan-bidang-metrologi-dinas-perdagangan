<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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
        "jenis_dukungan",
    ];

    public function kendaraan(): HasMany
    {
        return $this->hasMany(Kendaraan::class, 'perusahaan_id', 'id');
    }

    public function teraJenisA(): HasManyThrough
    {
        return $this->hasManyThrough(TeraJenisA::class, Kendaraan::class, 'perusahaan_id', 'kendaraan_id', 'id', 'id');
    }
}
