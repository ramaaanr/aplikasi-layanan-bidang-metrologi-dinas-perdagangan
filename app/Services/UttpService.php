<?php

namespace App\Services;

interface UttpService
{
  public function store(array $data, string $tera): bool;
  public function update(array $data, string $tera, string $id): bool;
}
