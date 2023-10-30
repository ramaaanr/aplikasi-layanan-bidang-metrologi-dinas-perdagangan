<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class IdentitasUttpJenisD extends IdentitasUttp
{
    protected $table = 'identitas_uttp_jenis_d';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable([
            'tera_jenis_c_id',
            'kapasitas',
            'jenis',
        ]);
    }

    public function teraJenisC(): BelongsTo
    {
        return $this->belongsTo(TeraJenisC::class, 'tera_jenis_c_id', 'id');
    }
}
