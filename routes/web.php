<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KartunController;
use App\Http\Controllers\KegiatankartunController;
use App\Http\Controllers\PrestasikartunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemografisController;
use App\Http\Controllers\EkonomiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\KegiatanpkkController;
use App\Http\Controllers\KepaladesaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\PrestasipkkController;
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
Route::get('/pkk', [HomeController::class,'pkk']);
Route::get('/karangtaruna', [HomeController::class,'kartun']);
Route::get('/pengumuman', [HomeController::class,'pengumuman']);
Route::get('/pemerintahandesa', [HomeController::class,'anggota']);
Route::get('/galeri', [HomeController::class,'galeri']);

//Auth
Route::get('/adminsindangjawamandiri', [AuthController::class,'login'])->name('login');
Route::post('/adminsindangjawamandiri', [AuthController::class,'authenticated']);
Route::get('/logout', [AuthController::class,'logout']);

//Dashboard
Route::get('pengumuman/detail/{pengumuman}', [PengumumanController::class, 'show'])->name('updatepengumuman.show');
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', [DashboardController::class,'index']);
    Route::resource('updatevisimisi', VisimisiController::class);
    Route::resource('updatekepaladesa', KepaladesaController::class);
    Route::resource('updatesejarah', SejarahController::class);
    Route::resource('updategeografis', GeografisController::class);
    Route::resource('updatedemografis', DemografisController::class);
    Route::resource('updateekonomi', EkonomiController::class);
    Route::resource('updatepkk', PkkController::class);
    Route::resource('updatekegiatanpkk', KegiatanpkkController::class);
    Route::resource('updateprestasipkk', PrestasipkkController::class);
    Route::resource('updatekartun', KartunController::class);
    Route::resource('updatekegiatankartun', KegiatankartunController::class);
    Route::resource('updateprestasikartun', PrestasikartunController::class);
    Route::resource('updateanggota', AnggotaController::class);
    Route::resource('updategaleri', GaleriController::class);
    Route::resource('updatepengumuman', PengumumanController::class)->except(['show']);
});