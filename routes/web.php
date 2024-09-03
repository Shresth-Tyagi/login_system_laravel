
 
<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
  
Route::get('/', [UserController::class, 'index'])->name('welcome');

//registration route
Route::view('register', 'register')->name('register');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');


//login route
Route::view('login', 'login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

// home page or dashbord
//Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
});
