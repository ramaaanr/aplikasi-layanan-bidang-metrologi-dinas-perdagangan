<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\AdminService;

class AdminServiceTest extends TestCase
{
    private AdminService $adminService;
    private $falseAccount = [
        'username' => '',
        'password' => '',
    ];
    private $trueAccount = [
        'username' => 'admin',
        'password' => 'admin',
    ];

    protected function setUp(): void
    {
        parent::setUp();
        $this->adminService = $this->app->make(AdminService::class);
    }

    public function testLoginUsernameFalse()
    {
        $admin = $this->adminService->login($this->falseAccount['username'], $this->trueAccount['password']);
        self::assertFalse($admin);
    }

    public function testLoginPasswordFalse()
    {
        $admin = $this->adminService->login($this->trueAccount['username'], $this->falseAccount['password']);
        self::assertFalse($admin);
    }

    public function testLoginSuccess()
    {
        $admin = $this->adminService->login($this->trueAccount['username'], $this->trueAccount['password']);
        self::assertEquals('1', $admin->id);
    }

    public function testStoreRememberTokenSuccess()
    {
        $admin = $this->adminService->login($this->trueAccount['username'], $this->trueAccount['password']);
        $token = $this->adminService->storeRememberToken($admin->id);
        self::assertIsString($token);
    }
}
