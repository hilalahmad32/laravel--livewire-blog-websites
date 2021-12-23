<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Category extends Component
{
    public $showTable = true;
    public $showCreateForm=false;
    public $showUpdateForm=false;
    public function render()
    {
        return view('livewire.admin.category')->layout('layouts.admin-app');
    }

    public function showForm()
    {

        $this->showTable=false;
        $this->showCreateForm=true;
    }
}
