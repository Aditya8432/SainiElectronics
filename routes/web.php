<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashController;
use App\Http\Controllers\websiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DarkModeController;

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

// for dark mode 
Route::post('/toggle-dark-mode', [DarkModeController::class, 'toggle'])->name('toggle-dark-mode');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Admin Dashboard Routes
    Route::get('/adminDash', [AdminDashController::class, 'index'])->name('admindash.index');
});
//Website Routes 
Route::get('/',[websiteController::class, 'index'])->name('layout.index');
Route::get('/shoping',[websiteController::class, 'shoping'])->name('layout.shop');

// All routes

require __DIR__.'/auth.php';
