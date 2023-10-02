<?php

namespace App\Livewire;

use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Login extends Component
{
    public $username;
    public $password;
    public $status = 'success';

    public function doLogin()
    {
        $this->validate(
            [
                'username' => 'required|min:3|max:32',
                'password' => 'required|min:6',
            ],
            [
                'min' => ':attribute terlalu pendek',
                'max' => ':attribute terlalu panjang',
                'required' => ':attribute wajib diisi',
            ],
        );
        $this->status = 'success';
    }

    public function updatedUsername()
    {
        $this->validate(
            [
                'username' => 'min:3|max:32|required'
            ],
            [
                'min' => ':attribute terlalu pendek',
                'max' => ':attribute terlalu panjang',
                'required' => ':attribute wajib diisi',
            ],

        );
    }

    public function updatedPassword()
    {
        $this->validate(
            [
                'password' => 'min:6|required',
            ],
            [
                'min' => ':attribute terlalu pendek',
                'required' => ':attribute wajib diisi',
            ],
        );
    }

    public function render()
    {
        return view('livewire.login');
    }
}
