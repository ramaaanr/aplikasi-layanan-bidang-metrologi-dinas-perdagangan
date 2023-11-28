<?php

namespace App\Services;

interface AdminService
{
  public function login(string $username, string $password): object|bool;
  public function storeRememberToken(string $id): string;
}
