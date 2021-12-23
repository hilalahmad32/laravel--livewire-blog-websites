<?php

namespace App\Http\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public function render()
    {
        return view('livewire.contact')->layout('layouts.app');

    }

    public function resetField()
    {
        $this->name = null;
        $this->email = null;
        $this->subject = null;
        $this->message = null;
    }

    public function submit()
    {
        $contact=new ModelsContact();
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);

        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject == "" ? "null" : $this->subject;
        $contact->message = $this->message;
        $result=$contact->save();
        $this->resetField();
    }
}
