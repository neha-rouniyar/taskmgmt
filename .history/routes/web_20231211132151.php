<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login-form',[LoginController::class,'index'])->name('login.form');




Route::get('/register-form',[LoginController::class,'index2'])->name('register.form');
Route::post('/register-form-submit',[LoginController::class,'register'])->name('register.form');


