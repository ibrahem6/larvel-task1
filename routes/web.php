<?php

use App\Http\Controllers\PostController;
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

Route::resource('posts',PostController::class);
Route::get('posts/restore/{id}',[PostController::class,'restore'])->name('posts.restore');
Route::get('posts/force/delete/{id}',[PostController::class,'force_delete'])->name('posts.force_delete');
