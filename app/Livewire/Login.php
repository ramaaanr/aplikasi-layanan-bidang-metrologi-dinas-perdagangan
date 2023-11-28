<?php

namespace App\Livewire;

use App\Services\AdminService;
use Livewire\Component;

class Login extends Component
{
    private AdminService $adminService;

    public function boot(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public $username = 'admin';
    public $password = 'admin';

    public function doLogin()
    {
        $admin = $this->adminService->login($this->username, $this->password);
        if ($admin) {
            session()->put('admin', [
                'id' => $admin->id,
                'remember_token' => $this->adminService->storeRememberToken($admin->id),
            ]);
            return redirect()->intended();
        }
        $this->addError('password', 'Password Tidak Sesuai');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
