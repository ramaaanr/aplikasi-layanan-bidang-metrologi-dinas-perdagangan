<?php

namespace App\Models;


class TeraJenisB extends Tera
{
  protected $table = 'tera_jenis_b';
  public function __construct(array $attributes = [])
  {
    parent::__construct($attributes);

    $this->mergeFillable(['jumlah_nozzle']);
  }
}
