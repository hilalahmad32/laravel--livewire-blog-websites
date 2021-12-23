<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.admin.auth.logout');
    }


    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect(route('admin.login'));
    }
}
