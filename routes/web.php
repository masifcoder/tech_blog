<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get("/", [BlogController::class, 'index'])->name('blog.index');
Route::get("/post", [BlogController::class, 'single'])->name('blog.single');