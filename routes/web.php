<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfilMitraController;
use App\Http\Controllers\TalasController;
use App\Http\Controllers\TanamanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/detail-berita', [LandingPageController::class, 'detailberita']);
Route::get('/detail-galeri', [LandingPageController::class, 'detailgaleri']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/profil', [AuthController::class, 'profil']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login-post', [AuthController::class, 'postlogin']);


Route::middleware(['role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::resource('portfolio', PortfolioController::class);
        Route::get('portfolio/{id}/delete', [PortfolioController::class, 'destroy']);

        Route::resource('kontak', KontakController::class);
        Route::resource('profilmitra', ProfilMitraController::class);
        Route::resource('akunmitra', AkunController::class);
        Route::resource('tanaman', TanamanController::class);

        Route::resource('monitoring-talas', TalasController::class);
        
        Route::resource('berita', BeritaController::class);
        Route::get('berita/{id}/delete', [BeritaController::class, 'destroy']);


        Route::get('tentangkami', [KontakController::class, 'index_tentangkami']);
        Route::patch('tentangkami/{id}', [KontakController::class, 'update_tentangkami']);
    });
});

Route::middleware(['role:mitra'])->group(function () {
    Route::prefix('mitra')->group(function () {
    });
});
