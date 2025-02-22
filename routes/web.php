<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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
Route::get('/', [RegisterController::class, 'index'])->name('index');
Route::get('/users', [RegisterController::class, 'UsersView'])->name('users');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


