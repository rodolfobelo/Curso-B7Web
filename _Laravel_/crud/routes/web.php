<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/post/index', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/show', [PostController::class, 'show']);
Route::get('/post/edit', [PostController::class, 'edit']);
Route::get('/post/destroy', [PostController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
