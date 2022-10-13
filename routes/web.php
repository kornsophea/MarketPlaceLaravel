<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/readmore', [HomeController::class, 'readmore']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'detail']);

Route::get('/add', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::post('/post/my-posts', [PostController::class, 'myposts']);

Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/registers', [AuthController::class, 'registers']);

Route::get('/login', [AuthController::class, 'loginform']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::any('/admin', [HomeController::class, 'admin']);