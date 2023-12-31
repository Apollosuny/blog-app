<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blogs/create', [BlogController::class, 'create_blog'])->name('blog_create');
Route::post('/blog-create', [BlogController::class, 'store']);
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);
Route::put('/blogs/{blog}', [BlogController::class, 'update']);

Route::get('/blogs/{blog}', [BlogController::class, 'show_detail']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/local/', [AuthController::class, 'authenticate'])->name('auth.handleLogin');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/local/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::middleware([]);