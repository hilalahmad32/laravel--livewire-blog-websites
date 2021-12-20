<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class CategoryPost extends Component
{

    public $page=6;
    public $pageCount;
    public $cat_id;

    public function mount($id)
    {
        $this->cat_id=$id;
    }

    public function render()
    {
        $this->pageCount=Blog::get();
        $posts=Blog::where('cat_id',$this->cat_id)->orderBy('id','DESC')->paginate($this->page);
        return view('livewire.category-post',compact(['posts']))->layout("layouts.app");
    }

    public function loadMore()
    {
        $this->page +=4;
    }
}
