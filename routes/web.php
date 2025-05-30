<?php

use App\Livewire\ShowPost;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::all(),
    ]);
});

Route::get('posts/{post:slug}', ShowPost::class)->name('posts.show');
