<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function teraJenisD(): BelongsTo
    {
        return $this->belongsTo(TeraJenisD::class, 'tera_jenis_d_id', 'id');
    }
}
