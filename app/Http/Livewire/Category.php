<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.category')->layout('layouts.app');
    }
}
