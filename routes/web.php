<?php

use App\Http\Livewire\Admin\Admin;
use App\Http\Livewire\Admin\Post;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Category as AdminCategory;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Category;
use App\Http\Livewire\CategoryPost;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\PostDetail;
use Illuminate\Support\Facades\Route;


Route::get('/',Home::class)->name("home");
Route::get('/blog',Blog::class)->name("blog");
Route::get('/category',Category::class)->name("category");
Route::get('/contact',Contact::class)->name("contact");
Route::get('/category-post/{id}',CategoryPost::class)->name('category-post');
Route::get('/post-detail/{id}',PostDetail::class)->name('post-detail');

// Route::get('/admin',Login::class)->name('admin.login');
Route::middleware(['guest:admins'])->group(function () {
Route::get('/admin/login',Login::class)->name('admin.login');

});

Route::middleware(['auth:admins'])->group(function () {
    Route::prefix('/admin')->group(function (){
        Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');
        Route::get('/category',AdminCategory::class)->name('admin.category');
        Route::get('/posts',Post::class)->name('admin.post');
        Route::get('/admin',Admin::class)->name('admin.admin');
    });
});


