<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemografisController;
use App\Http\Controllers\EkonomiController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\KepaladesaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisimisiController;

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
Route::get('/beritadesa', [HomeController::class,'beritadesa']);
Route::get('/pemerintahandesa', [HomeController::class,'anggota']);

//Auth
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticated']);
Route::get('/logout', [AuthController::class,'logout']);

//Dashboard
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', [DashboardController::class,'index']);
    Route::resource('updatevisimisi', VisimisiController::class);
    Route::resource('updatekepaladesa', KepaladesaController::class);
    Route::resource('updatesejarah', SejarahController::class);
    Route::resource('updategeografis', GeografisController::class);
    Route::resource('updatedemografis', DemografisController::class);
    Route::resource('updateekonomi', EkonomiController::class);
    Route::resource('updateanggota', AnggotaController::class);
});