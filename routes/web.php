<?php

use App\Http\Controllers\AdminController;
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
Route::get('/blogs/{blog}', [BlogController::class, 'show_detail']);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

// Login
Route::middleware(['guest'])->get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/local/', [AuthController::class, 'authenticate'])->name('auth.handleLogin');

// Register
Route::middleware(['guest'])->get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/local/register', [AuthController::class, 'store']);

Route::post('/upload', [BlogController::class, 'upload_image'])->name('upload');
Route::get('/profile/achieve', [BlogController::class, 'achieve'])->name('achieve');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [AuthController::class, 'edit_profile'])->name('edit_profile');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->withTrashed();
    Route::post('/blogs/{blog}/restore', [BlogController::class, 'restore'])->withTrashed();
});

Route::post('/blog-create', [BlogController::class, 'store']);
Route::put('/blogs/{blog}', [BlogController::class, 'update']);
Route::put('/profile/edit', [AuthController::class, 'save_profile']);

// Admin route
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard/all-blog', [AdminController::class, 'all_blog'])->name('all-blog');
    Route::delete('/dashboard/all-blog/{blog}', [AdminController::class, 'destroy']);
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/categories', [AdminController::class, 'all_categories'])->name('all-categories');
    Route::get('/dashboard/users', [AdminController::class, 'users'])->name('users');
});
