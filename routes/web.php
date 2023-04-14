<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CarController;
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

Route::redirect('/' , '/autocars');
Route::resource('/autocars' , Carcontroller::class);
Route::get('users/export/', [UsersController::class, 'export'])->name('excel.export');
Route::post('users/import/', [UsersController::class, 'import'])->name('excel.import');

