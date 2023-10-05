<?php

use App\Models\TeraJenisC;

return [
  'tum-bbm' => ['jenis' => 'tera_jenis_a'],
  'timbangan-elektronik-kelas' => ['jenis' => 'tera_jenis_b'],
  'timbangan-jembatan' => ['jenis' => 'tera_jenis_b'],
  'timbangan-cepat' => ['jenis' => 'tera_jenis_c', 'model' => new TeraJenisC()],
  'timbangan-pegas' => ['jenis' => 'tera_jenis_c', 'model' => new TeraJenisC()],
  'timbangan-meja' => ['jenis' => 'tera_jenis_f'],
  'timbangan-bobot-ingsut' => ['jenis' => 'tera_jenis_c', 'model' => new TeraJenisC()],
  'timbangan-sentisimal' => ['jenis' => 'tera_jenis_f'],
  'pompa-ukur-bbm' => ['jenis' => 'tera_jenis_d'],
  'dacin' => ['jenis' => 'tera_jenis_c', 'model' => new TeraJenisC()],
  'neraca' => ['jenis' => 'tera_jenis_f'],
  'takaran-basah-kering' => ['jenis' => 'tera_jenis_e'],
  'meter-kayu' => ['jenis' => 'tera_jenis_c', 'model' => new TeraJenisC()]
];
