<?php

namespace App\Services\Impl;

use App\Services\UttpService;
use PhpParser\Node\Stmt\TryCatch;

class UttpServiceImpl implements UttpService
{
  public function store(array $data, string $tera): bool
  {
    try {
      $model = config("tera.$tera.model_uttp");
      $model::create($data);
      return true;
    } catch (\Throwable $th) {
      return false;
    }
  }

  public function update(array $data, string $tera, string $id): bool
  {
    try {
      $model = config("tera.$tera.model_uttp");
      $model::where('id', $id)->update($data);
      return true;
    } catch (\Throwable $th) {
      return false;
    }
  }
}
