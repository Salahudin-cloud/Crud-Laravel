<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddPostController;
use App\Http\Controllers\AllPostController;
use App\Http\Controllers\UpdatePostController;
use App\Http\Controllers\DeletePostController;
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


Route::get('/', [AddPostController::class, 'index']);
Route::post('/post/new_post', [AddPostController::class, 'addPostAction']);
Route::get('/post/all_posts', [AllPostController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/post/update_post/view/{slug}', [UpdatePostController::class, 'index'])->name('post.update_view');
Route::put('/post/update_post/update/', [UpdatePostController::class, 'updatePostAction']);
Route::delete('/post/delete_post/{id}', [DeletePostController::class, 'deletePostAction']);
