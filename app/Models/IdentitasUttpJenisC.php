<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasUttpJenisC extends IdentitasUttp
{
    protected $table = 'identitas_uttp_jenis_c';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable([
            'tera_jenis_b_id',
            'debit_maksimal',
            'media',
            'jumlah_nozzle',
        ]);
    }
}