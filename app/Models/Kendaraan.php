<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kendaraan extends Model
{
    use HasFactory, SoftDeletes;
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

    public function teraJenisA(): HasMany
    {
        return $this->hasMany(TeraJenisA::class, 'kendaraan_id', 'id');
    }

    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id', 'id');
    }
}
