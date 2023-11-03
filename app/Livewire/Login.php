<?php

namespace App\Livewire;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $username = 'admin';
    public $password = 'admin';
    public $status = 'success';

    private function validateAdmin()
    {
        $admin = Admin::where('username', $this->username)->first();
        return $admin != null ? (Hash::check($this->password, $admin->password) ? $admin : false) : false;
    }

    private function storeRememberToken($id)
    {
        $token = Str::uuid()->toString();
        Admin::where('id', $id)->update(['remember_token' => $token]);
        return $token;
    }

    public function doLogin()
    {
        $admin = $this->validateAdmin();
        if ($admin) {
            session()->put('admin', [
                'id' => $admin->id,
                'remember_token' => $this->storeRememberToken($admin->id),
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