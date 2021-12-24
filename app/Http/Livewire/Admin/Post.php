<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;

class Post extends Component
{
    public $title;
    public $category;
    public $content;
    public $main_image;
    public $thumb;

    public $edit_id;
    public $edit_title;
    public $edit_category;
    public $edit_content;
    public $old_main_image;
    public $old_thumb;
    public $new_main_image;
    public $new_thumb;

    public $showTable = true;
    public $showCreateForm = false;
    public $showUpdateForm = false;

    public function render()
    {
        $categorys = Category::orderBy('id', 'DESC')->get();
        $posts = Blog::orderBy('id', 'DESC')->get();
        return view('livewire.admin.post', compact(['categorys', 'posts']))->layout('layouts.admin-app');
    }

    public function showForm()
    {
        $this->showTable = false;
        $this->showCreateForm = true;
    }

    public function resetField()
    {
        $this->title = "";
        $this->category = "";
        $this->content = "";
        $this->main_image = "";
        $this->thumb = "";

        $this->edit_title = "";
        $this->edit_category = "";
        $this->edit_content = "";
        $this->new_main_image = "";
        $this->new_thumb = "";
    }
    use WithFileUploads;
    public function store()
    {
        $posts = new Blog();
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);

        $thumb = "";
        if ($this->thumb) {
            $thumb = $this->thumb->store('blog/thumb', 'public');
        } else {
            $thumb = "null";
        }

        $fillImage = "";
        if ($this->main_image) {
            $fillImage = $this->main_image->store('blog/main', 'public');
        } else {
            $fillImage = "null";
        }

        $posts->title = $this->title;
        $posts->content = $this->content;
        $posts->cat_id = $this->category;
        $posts->admin_id = Auth::guard('admins')->user()->id;
        $posts->thumb = $thumb;
        $posts->image = $fillImage;
        $posts->views = 0;
        $posts->save();
        $categorys = Category::find($this->category);
        $categorys->posts += 1;
        $categorys->save();

        $this->resetField();
        $this->showTable = true;
        $this->showCreateForm = false;
    }

    public function edit($id)
    {
        $this->showTable = false;
        $this->showUpdateForm = true;

        $posts = Blog::find($id);
        $this->edit_id = $posts->id;
        $this->edit_title = $posts->title;
        $this->edit_category = $posts->cat_id;
        $this->edit_content = $posts->content;
        $this->old_main_image = $posts->image;
        $this->old_thumb = $posts->thumb;
    }

    public function update($id)
    {
        $posts = Blog::find($id);
        $this->validate([
            'edit_title' => 'required',
            'edit_category' => 'required',
            'edit_content' => 'required',
        ]);

        $destination1 = public_path('storage\\' . $posts->thumb);
        $destination2 = public_path('storage\\' . $posts->image);


        $thumb = "";
        if ($this->new_thumb != "") {
            if (File::exists($destination1)) {
                File::delete($destination1);
                $thumb = $this->new_thumb->store('blog/thumb', 'public');
            }
        } else {
            $thumb = $this->old_thumb;
        }


        $fillImage = "";
        if ($this->new_main_image != "") {
            if (File::exists($destination2)) {
                File::delete($destination2);
                $fillImage = $this->new_main_image->store('blog/main', 'public');
            }
        } else {
            $fillImage = $this->old_main_image;
        }

        $posts->title = $this->edit_title;
        $posts->content = $this->edit_content;
        $posts->cat_id = $this->edit_category;
        $posts->thumb = $thumb;
        $posts->image = $fillImage;
        $posts->save();
        $this->resetField();
        $this->showTable = true;
        $this->showUpdateForm = false;
    }


    public function delete($id)
    {
        $posts = Blog::find($id);
        $destination1 = public_path('storage\\' . $posts->thumb);
        $destination2 = public_path('storage\\' . $posts->image);

        if (File::exists($destination1)) {
            File::delete($destination1);
        }

        if (File::exists($destination2)) {
            File::delete($destination2);
        }
        $posts->delete();
        $categorys = Category::find($posts->cat_id);
        $categorys->posts -= 1;
        $categorys->save();
    }
}
