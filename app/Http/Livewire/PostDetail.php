<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class PostDetail extends Component
{
    public $post_id;
    public $posts;

    public function mount($id)
    {
        $this->post_id=$id;
    }
    public function render()
    {

        $this->posts=Blog::find($this->post_id);
        return view('livewire.post-detail');
    }
}
