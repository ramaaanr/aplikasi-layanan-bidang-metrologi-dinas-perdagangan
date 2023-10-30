<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function teraJenisC(): BelongsTo
    {
        return $this->belongsTo(TeraJenisC::class, 'tera_jenis_c_id', 'id');
    }
}
