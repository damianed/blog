<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/blog/{post:slug}', [BlogPostController::class, 'show'])->name('post.show');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
    Route::get('/post/new', [BlogPostController::class, 'create'])->middleware(['auth'])->name('post.new');
    Route::put('/post/new', [BlogPostController::class, 'store'])->middleware(['auth'])->name('post.create');
    Route::get('/post/{post}/delete', [BlogPostController::class, 'destroy'])->middleware(['auth'])->name('post.delete');
});

require __DIR__.'/auth.php';
