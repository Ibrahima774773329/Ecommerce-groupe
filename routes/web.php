<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;



Route::get('/home',[pagesController::class, 'index'])->name('home');
Route::get('/about',[pagesController::class, 'about'])->name('about');
Route::get('/footer',[pagesController::class, 'footer'])->name('footer');
Route::get('/contact', [pagesController::class, 'contact'])->name('contact');
Route::get('/checkout', [pagesController::class, 'checkout'])->name('checkout');
Route::get('/AddCart', [pagesController::class, 'AddCart'])->name('AddCart');
// Route::get('/whislist',[pagesController::class, 'whislist'])->name('whislist');
Route::get('/details',[pagesController::class, 'details'])->name('details');

Route::get('/', function () {
    return view('index');
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
