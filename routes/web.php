<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\PostController;
use Illuminate\Support\Facades\Route;


Route::get("/", [BlogController::class, 'index'])->name('blog.index');
Route::get("/post", [BlogController::class, 'single'])->name('blog.single');


Route::get("/login", [AuthController::class, 'loginForm'])->name("loginForm");
Route::post("/login", [AuthController::class, 'login'])->name("login");
Route::post("/logout", [AuthController::class, 'logout'])->name('logout');


Route::get("/signup", [AuthController::class, 'signupForm'])->name("signupForm");
Route::post("/register", [AuthController::class, 'register'])->name("register");


// dashboard routes
// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index')->middleware('auth');
// Route::get("/dashboard/post/create", [])
// Route::post("/dashboard/post/store")

Route::middleware(['auth'])->prefix('/dashboard')->group( function() {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard.index');
    Route::get("/settings", [DashboardController::class, 'settings'])->name("dashbaord.settings");

    // post routes
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');

});
