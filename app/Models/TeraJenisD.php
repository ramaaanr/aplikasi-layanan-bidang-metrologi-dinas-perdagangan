<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class TeraJenisD extends Tera
{
    protected $table = 'tera_jenis_d';
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable(['jumlah_perlengkapan']);
    }

    public function identitasUttpJenisE(): HasMany
    {
        return $this->hasMany(IdentitasUttpJenisE::class, 'tera_jenis_d_id', 'id');
    }
}
