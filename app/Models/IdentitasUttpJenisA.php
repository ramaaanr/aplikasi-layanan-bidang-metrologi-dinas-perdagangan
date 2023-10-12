<?php

namespace App\Models;


class IdentitasUttpJenisA extends IdentitasUttp
{
    protected $table = 'identitas_uttp_jenis_a';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable([
            'kelas',
            'tera_jenis_c_id',
            'kapasitas',
        ]);
    }
}
