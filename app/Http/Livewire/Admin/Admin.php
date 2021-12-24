<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin as ModelsAdmin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Admin extends Component
{
    public $fullname;
    public $username;
    public $email;
    public $roll;
    public $password;

    public $edit_id;
    public $edit_fullname;
    public $edit_username;
    public $edit_email;
    public $edit_roll;

    public $showTable =true;
    public $showCreateForm =false;
    public $showUpdateForm=false;


    public function render()
    {
        $admins= ModelsAdmin::orderBy('id','DESC')->get();
        return view('livewire.admin.admin',compact('admins'))->layout('layouts.admin-app');
    }

    public function showForm()
    {
        $this->showCreateForm=true;
        $this->showTable=false;

    }

    public function resetField()
    {
        $this->password ="";
        $this->username="";
        $this->eamil="";
        $this->roll="";
        $this->fullname="";

       $this->edit_fullname = "";
       $this->edit_username = "";
       $this->edit_email = "";
       $this->edit_roll = "";

    }


    public function store()
    {
        $admins=new ModelsAdmin();
        $this->validate([
            'fullname'=>'required',
            'username'=>'required',
            'email'=>'required',
            'roll'=>'required',
            'password'=>'required',
        ]);
        $admins->fullname=$this->fullname;
        $admins->username=$this->username;
        $admins->email=$this->email;
        $admins->roll=$this->roll;
        $admins->password=Hash::make($this->password);
        $admins->save();
        $this->resetField();
        $this->showCreateForm=false;
        $this->showTable=true;
    }

    public function edit($id)
    {
        $this->showUpdateForm=true;
        $this->showTable=false;
        $admins= ModelsAdmin::find($id);
        $this->edit_id=$admins->id;
        $this->edit_fullname =$admins->fullname;
        $this->edit_username =$admins->username;
        $this->edit_email =$admins->email;
        $this->edit_roll =$admins->roll;

    }

    public function update($id)
    {
        $admins= ModelsAdmin::find($id);
        $this->validate([
            'edit_fullname'=>'required',
            'edit_username'=>'required',
            'edit_email'=>'required',
            'edit_roll'=>'required',
        ]);
        $admins->fullname=$this->edit_fullname;
        $admins->username=$this->edit_username;
        $admins->email=$this->edit_email;
        $admins->roll=$this->edit_roll;
        $admins->save();
        $this->resetField();
        $this->showUpdateForm=false;
        $this->showTable=true;
    }

    public function delete($id)
    {
        $admins= ModelsAdmin::find($id);
        $admins->delete();
    }
}
