<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class TeraJenisC extends Tera
{

    protected $table = 'tera_jenis_c';

    public function identitasUttpJenisA(): HasMany
    {
        return $this->hasMany(IdentitasUttpJenisA::class, 'tera_jenis_c_id', 'id');
    }
    public function identitasUttpJenisB(): HasMany
    {
        return $this->hasMany(IdentitasUttpJenisB::class, 'tera_jenis_c_id', 'id');
    }
    public function identitasUttpJenisD(): HasMany
    {
        return $this->hasMany(IdentitasUttpJenisD::class, 'tera_jenis_c_id', 'id');
    }
}
