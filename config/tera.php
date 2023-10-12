<?php

use App\Models\IdentitasUttpJenisA;
use App\Models\IdentitasUttpJenisB;
use App\Models\IdentitasUttpJenisC;
use App\Models\IdentitasUttpJenisD;
use App\Models\IdentitasUttpJenisE;
use App\Models\TeraJenisA;
use App\Models\TeraJenisB;
use App\Models\TeraJenisC;
use App\Models\TeraJenisD;

return [
  'tum-bbm' =>
  [
    'jenis' =>
    'tera_jenis_a',
    'jenis_uttp' => null,
    'model_tera' => new TeraJenisA(),
    'model_uttp' => null
  ],
  'timbangan-elektronik-kelas' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-a',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisA()
  ],
  'timbangan-jembatan' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-a',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisA()
  ],
  'timbangan-cepat' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-b',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisB()
  ],
  'timbangan-pegas' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-b',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisB()
  ],
  'timbangan-meja' =>
  [
    'jenis' => 'tera_jenis_d',
    'jenis_uttp' => 'uttp-jenis-e',
    'model_tera' => new TeraJenisD(),
    'model_uttp' => new IdentitasUttpJenisE()
  ],
  'timbangan-bobot-ingsut' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-b',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisB()
  ],
  'timbangan-sentisimal' =>
  [
    'jenis' => 'tera_jenis_d',
    'jenis_uttp' => 'uttp-jenis-e',
    'model_tera' => new TeraJenisD(),
    'model_uttp' => new IdentitasUttpJenisE()
  ],
  'pompa-ukur-bbm' =>
  [
    'jenis' => 'tera_jenis_b',
    'jenis_uttp' => 'uttp-jenis-c',
    'model_tera' => new TeraJenisB(),
    'model_uttp' => new IdentitasUttpJenisC()
  ],
  'dacin' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-b',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisB()
  ],
  'neraca' =>
  [
    'jenis' => 'tera_jenis_d',
    'jenis_uttp' => 'uttp-jenis-e',
    'model_tera' => new TeraJenisD(),
    'model_uttp' => new IdentitasUttpJenisE()
  ],
  'takaran-basah-kering' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-d',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisD()
  ],
  'meter-kayu' =>
  [
    'jenis' => 'tera_jenis_c',
    'jenis_uttp' => 'uttp-jenis-b',
    'model_tera' => new TeraJenisC(),
    'model_uttp' => new IdentitasUttpJenisB()
  ]
];
