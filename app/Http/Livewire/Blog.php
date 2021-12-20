<?php

namespace App\Http\Livewire;

use App\Models\Blog as ModelsBlog;
use App\Models\Category;
use Livewire\Component;

class Blog extends Component
{
    public $page=6;
    public $pageCount;
    public $pageCountCategory;
    public $pages=4;
    public $popularPost;

    public function render()
    {
        $this->pageCount=ModelsBlog::get();
        $this->pageCountCategory=Category::get();
        $posts=ModelsBlog::orderBy('id','DESC')->paginate($this->page);
        $categorysRight=Category::orderBy('id','DESC')->paginate($this->pages);
        $this->popularPost=ModelsBlog::orderBy('id','DESC')->where('views' ,'>',40)->limit(3)->get();

        return view('livewire.blog',compact(['posts','categorysRight']))->layout('layouts.app');
    }

    public function loadMore()
    {
        $this->page +=4;
    }

    public function loadMoreCategory()
    {
        $this->pages +=4;
    }
}
