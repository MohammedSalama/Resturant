<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProfileController;
use App\Models\Hero;
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

/**
 * Authentication
 */
Route::get('/', function () {
    return view('auth.login');
});

/**
 * Frontend Theme
 */
Route::get('/', function () {
    $hero = Hero::first();
    return view('Frontend.master',compact('hero'));
})->name('resturant');

/**
 * Backend Theme
 */
Route::get('/admin-dashboard', function () {
    return view('Backend.admin-dashboard');
})->middleware(['auth', 'verified'])->name('admin-dashboard');

Route::get('hero',[HeroController::class,'index'])->name('hero.index');
Route::post('hero/{id}',[HeroController::class,'update'])->name('hero.update');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
