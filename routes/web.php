<?php

use App\Http\Controllers\ContacController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservasiController;
use App\Models\Contac;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contactus', function () {
    return view('contactus');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Route::resource('dashboard', HomeController::class);
    Route::resource('order', OrderController::class);
    Route::resource('menu', MenuController::class);
    // Route::resource('profile', ProfileController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('reservasi', ReservasiController::class);


});

require __DIR__.'/auth.php';
