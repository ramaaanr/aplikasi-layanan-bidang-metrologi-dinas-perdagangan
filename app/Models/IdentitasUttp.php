<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasUttp extends Model
{
  use HasFactory;
  protected $primaryKey = 'id';
  protected $keyType = 'int';
  public $incrementing = true;
  public $timestamps = false;

  // Fungsi untuk mengembalikan fillable yang digunakan oleh semua jenis identitas uttp
  protected $fillable =  [
    'merek',
    'tipe',
    'nomor_seri',
  ];
}
