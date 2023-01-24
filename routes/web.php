<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordResetController;


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
});

Route::get('/registration', [RegisterController::class, 'register'])->name('registration');
Route::post('/register', [RegisterController::class, 'postRegistration'])->name('register');

Route::get('forget-password', [PasswordResetController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [PasswordResetController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password', [PasswordResetController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [PasswordResetController::class, 'submitResetPasswordForm'])->name('reset.password.post');
