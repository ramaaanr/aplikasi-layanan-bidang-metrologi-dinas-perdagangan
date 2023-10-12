<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasUttpJenisE extends IdentitasUttp
{
    protected $table = 'identitas_uttp_jenis_e';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable([
            'tera_jenis_d_id',
            'kapasitas',
        ]);
    }
}
