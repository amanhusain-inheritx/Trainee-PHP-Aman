<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;

// Home
Route::get('/', function () {
    return view('welcome');
});


// 👤 Users Routes
Route::resource('users', UserController::class);


// 📝 Posts Routes
Route::resource('posts', PostController::class);


// 💬 Comments Routes
Route::resource('comments', CommentController::class);


// 🏷️ Tags Routes
Route::resource('tags', TagController::class);