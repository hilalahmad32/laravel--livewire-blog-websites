<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category as ModelsCategory;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Category extends Component
{
    public $category_name;
    public $file;

    public $edit_id;
    public $edit_category_name;
    public $old_image;
    public $new_image;


    public $showTable = true;
    public $showCreateForm = false;
    public $showUpdateForm = false;

    use WithFileUploads;

    public function render()
    {
        $categorys = ModelsCategory::orderBy('id', 'DESC')->get();
        return view('livewire.admin.category', compact('categorys'))->layout('layouts.admin-app');
    }

    public function showForm()
    {

        $this->showTable = false;
        $this->showCreateForm = true;
    }
    public function store()
    {
        $categorys = new ModelsCategory();
        $this->validate(
            [
                'category_name' => 'required',
            ]
        );
        $filename = "";
        if ($this->file) {
            $filename = $this->file->store('category', 'public');
        } else {
            $filename = "null";
        }
        $categorys->category_name = $this->category_name;
        $categorys->image = $filename;
        $categorys->posts = 0;
        $result = $categorys->save();
        // $this->resetField();
        $this->category_name = "";
        $this->file = "";
        $this->showTable = true;
        $this->showCreateForm = false;
    }

    // edit data
    public function show($id)
    {
        $this->showTable = false;
        $this->showUpdateForm = true;
        $categorys = ModelsCategory::find($id);
        $this->edit_id = $categorys->id;
        $this->edit_category_name = $categorys->category_name;
        $this->old_image = $categorys->image;
    }

    public function update($id)
    {
        $categorys = ModelsCategory::find($id);
        $destination = public_path('storage\\' . $categorys->image);
        $filename = "";
        if ($this->new_image) {
            if (File::exists($destination)) {
                File::delete($destination);
                $filename = $this->new_image->store('category', 'public');
            }
        } else {
            $filename = $this->old_image;
        }

        $categorys->category_name = $this->edit_category_name;
        $categorys->image = $filename;
        $categorys->save();

        $this->showTable = true;
        $this->showUpdateForm = false;
        $this->edit_category_name = "";
        $this->new_image = "";
    }
    public function delete($id)
    {
        $categorys = ModelsCategory::find($id);
        $destination = public_path('storage\\' . $categorys->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $result = $categorys->delete();
    }
}
