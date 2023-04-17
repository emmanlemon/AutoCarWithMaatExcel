<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/' , '/auth');

Route::get('/login', [AuthController::class, 'auth'])->name('auth.login_user');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
// Route::post('/register', [AuthController::class, 'forgot_password_user'])->name('auth.forgotpassword');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('auth.forgot_password');
Route::post('/forgot-password', [AuthController::class, 'forgot_password_user'])->name('auth.forgotpassword');


Route::resource('/autocars' , Carcontroller::class);
Route::get('/autocar/export', [Carcontroller::class, 'export'])->name('excel.export');
Route::post('/autocar/import', [Carcontroller::class, 'import'])->name('excel.import');
