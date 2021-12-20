<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{

    public $page=6;
    public $pageCount;

    public function render()
    {
        $categorys=ModelsCategory::orderBy('id','DESC')->paginate($this->page);
        $this->pageCount=ModelsCategory::get();
        return view('livewire.category',compact('categorys'))->layout('layouts.app');
    }

    public function loadMore()
    {
        $this->page +=3;
    }
}
