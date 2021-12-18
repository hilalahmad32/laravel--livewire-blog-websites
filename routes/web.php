<?php

use App\Http\Livewire\Blog;
use App\Http\Livewire\Category;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;


Route::get('/',Home::class)->name("home");
Route::get('/blog',Blog::class)->name("blog");
Route::get('/category',Category::class)->name("category");
Route::get('/contact',Contact::class)->name("contact");
