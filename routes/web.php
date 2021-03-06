<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post');

//Show Post
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
//Insert Post
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
//Update Post
Route::get('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
//Delete Post
Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
