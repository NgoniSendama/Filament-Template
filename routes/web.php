<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
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



Route::get('/', [HomeController::class, 'index'])->name('welcome');


Route::get('/about', [BlogController::class, 'about_index'])->name('about');
Route::get('/blogs/{slug}', [BlogController::class, 'about_show'])->name('blog.show');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');



Route::get('/six', function () {
    return view('layouts.guest-red');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
