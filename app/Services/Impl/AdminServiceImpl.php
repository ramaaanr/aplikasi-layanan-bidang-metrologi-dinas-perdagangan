<?php

namespace App\Services\Impl;

use Illuminate\Support\Str;
use App\Services\AdminService;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminServiceImpl implements AdminService
{
  public function login(string $username, string $password): object|bool
  {
    $admin = Admin::where('username', $username)->first();
    return $admin != null ? (Hash::check($password, $admin->password) ? $admin : false) : false;
  }
  public function storeRememberToken(string $id): string
  {
    $token = Str::uuid()->toString();
    Admin::where('id', $id)->update(['remember_token' => $token]);
    return $token;
  }
}
