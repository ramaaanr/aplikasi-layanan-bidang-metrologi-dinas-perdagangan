<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeraJenisC extends Tera
{
    use HasFactory;

    protected $table = 'tera_jenis_c';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}