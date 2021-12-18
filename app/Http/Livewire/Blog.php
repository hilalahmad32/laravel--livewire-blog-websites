<?php

namespace App\Http\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;

class Blog extends Component
{
    public $page=6;
    public $pageCount;
    public function render()
    {
        $this->pageCount=ModelsBlog::get();
        $posts=ModelsBlog::orderBy('id','DESC')->paginate($this->page);
        return view('livewire.blog',compact('posts'))->layout('layouts.app');
    }

    public function loadMore()
    {
        $this->page +=4;
    }
}
