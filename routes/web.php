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

Route::fallback(function () {
    return redirect("/posts");
});


Auth::routes();

Route::get('/data', [App\Http\Controllers\PostController::class, 'data'])->name('data');
Route::post('/data/update', [App\Http\Controllers\PostController::class, 'dataPost']);

Route::resource('posts', PostController::class)->middleware('auth');

