<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('posts.index'));
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/create', [PostController::class, 'createSubmit'])->name('posts.create-submit');
Route::get('posts/edit/{postId}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts/edit/{postId}', [PostController::class, 'edit_submit'])->name('posts.edit-submit');

