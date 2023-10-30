<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class TeraJenisB extends Tera
{
  protected $table = 'tera_jenis_b';
  public function __construct(array $attributes = [])
  {
    parent::__construct($attributes);

    $this->mergeFillable(['jumlah_nozzle']);
  }
  public function identitasUttpJenisC(): HasMany
  {
    return $this->hasMany(IdentitasUttpJenisC::class, 'tera_jenis_b_id', 'id');
  }
}
