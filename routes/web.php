<?php

use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'registration'])->name('register.registration');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('loginProcess');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Admin
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    
    // Destination
    Route::prefix('destination')->name('destination.')->group(function () {
        Route::get('', [DestinationController::class, 'index'])->name('index');
        Route::get('create', [DestinationController::class, 'create'])->name('create');
    });
});