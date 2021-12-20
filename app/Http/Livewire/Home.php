<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    public $randomPosts;
    public $categorys;
    public $posts;
    public $pages=2;
    public $pageCount;
    public $popularPost;
    use WithPagination;
    public function render()
    {
        // get random post for hero component
        $this->randomPosts=Blog::inRandomOrder()->limit(1)->get();
        $this->categorys=Category::inRandomOrder()->limit(9)->get();
        $this->posts=Blog::orderBy('id','DESC')->limit(6)->get();
        $categorysRight=Category::orderBy('id','DESC')->paginate($this->pages);
        $this->pageCount=Category::get();
        // this is popular post
        $this->popularPost=Blog::orderBy('id','DESC')->where('views' ,'>',40)->limit(3)->get();
        return view('livewire.home',compact('categorysRight'))->layout('layouts.app');
    }

    public function loadMore()
    {
        $this->pages +=3;
    }
}
