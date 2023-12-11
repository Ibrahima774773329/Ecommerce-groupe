<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleAuthController;


// khalil Route

Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::get('/whislist', [ProductsController::class, 'index'])->name('whislist');
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');


Route::get('/welcome',[pagesController::class, 'welcome'])->name('welcome');
Route::get('/home',[pagesController::class, 'index'])->name('home');
Route::get('/about',[pagesController::class, 'about'])->name('about');
Route::get('/footer',[pagesController::class, 'footer'])->name('footer');
Route::get('/contact', [pagesController::class, 'contact'])->name('contact');
Route::get('/checkout', [pagesController::class, 'checkout'])->name('checkout');
Route::get('/AddCart', [pagesController::class, 'AddCart'])->name('AddCart');
// Route::get('/whislist',[pagesController::class, 'whislist'])->name('whislist');
Route::get('/details',[pagesController::class, 'details'])->name('details');
Route::get('/sign-up',[pagesController::class, 'register'])->name('register');

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware', 'auth' => ['web', 'session']],function () {
    // Route::group(['middleware' => ['web', 'auth', 'verified', 'session']], function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // route sign goole

    Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
    Route::get('auth/google/callback',[GoogleAuthController::class, 'callbackGoogle']);



});

require __DIR__.'/auth.php';
