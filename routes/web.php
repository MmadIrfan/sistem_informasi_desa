<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/visimisi', [HomeController::class,'visimisi']);
Route::get('/sejarah', [HomeController::class,'sejarah']);
Route::get('/sambutan', [HomeController::class,'kepaladesa']);
Route::get('/geografis', [HomeController::class,'geografis']);
Route::get('/demografis', [HomeController::class,'demografis']);
Route::get('/kondisiekonomi', [HomeController::class,'kondisiekonomi']);

//Auth
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticated']);
Route::get('/logout', [AuthController::class,'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
