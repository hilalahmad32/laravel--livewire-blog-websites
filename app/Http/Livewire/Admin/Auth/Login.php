<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.admin.auth.login')->layout('layouts.admin-login');
    }

    public function login()
    {
        $admin=Auth::guard('admins')->attempt(['email' => $this->email, 'password' => $this->password]);

        if($admin){
            return redirect(route('admin.dashboard'));
        }else{
            dd("invalid username and password");
        }
    }
}
