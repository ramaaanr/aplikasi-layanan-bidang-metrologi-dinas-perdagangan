<?php

namespace App\Models;


class TeraJenisD extends Tera
{
    protected $table = 'tera_jenis_d';
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable(['jumlah_perlengkapan']);
    }
}
