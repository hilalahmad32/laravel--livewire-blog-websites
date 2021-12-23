<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Comment;
use Livewire\Component;

class PostDetail extends Component
{
    public $post_id;
    public $posts;

    public $name;
    public $email;
    public $website;
    public $message;


    public function mount($id)
    {
        $this->post_id=$id;
    }
    public function render()
    {

        $comments=Comment::orderBy('id', 'DESC')->get();
        $this->posts=Blog::find($this->post_id);
        return view('livewire.post-detail',compact('comments'))->layout('layouts.app');
    }

    public function submitComment()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'message'=>'required',
        ]);

        $comment=new Comment();

        $comment->name=$this->name;
        $comment->blog_id=$this->post_id;
        $comment->email=$this->email;
        $comment->website=$this->website == "null" ? null : $this->website;
        $comment->comment=$this->message;
        $result=$comment->save();

        $this->name="";
        $this->email="";
        $this->website="";
        $this->message="";
    }
}
