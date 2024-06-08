<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AlpukatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MitraController;
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

// Route::get('/simulasi', function () {
//     return view('mitra.simulasi-panen');
// });
Route::get('tanaman/{user_id}', [TalasController::class, 'getTanamans']);


Route::get('/', [LandingPageController::class, 'index']);
Route::get('/detail-berita', [LandingPageController::class, 'detailberita']);
Route::get('/detail-galeri', [LandingPageController::class, 'detailgaleri']);
Route::get('/tentangkami', [LandingPageController::class, 'tentangkami']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/profil', [AuthController::class, 'profil']);
Route::post('/profil/{id}', [AuthController::class, 'profile_update']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login-post', [AuthController::class, 'postlogin']);
Route::get('lupa-password', [AuthController::class, 'lupa_password']);
Route::post('lupa-password', [AuthController::class, 'lupa_password_post']);
Route::get('password-baru/{token_reset}', [AuthController::class, 'password_baru']);
Route::post('password-baru/{token_reset}', [AuthController::class, 'password_baru_post']);


Route::middleware(['role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::resource('portfolio', PortfolioController::class);
        Route::get('portfolio/{id}/delete', [PortfolioController::class, 'destroy']);

        Route::resource('kontak', KontakController::class);
        Route::resource('profilmitra', ProfilMitraController::class);
        Route::resource('akunmitra', AkunController::class);

        Route::resource('tanaman', TanamanController::class);
        Route::get('tanaman/{id}/delete', [TanamanController::class, 'destroy']);
        Route::get('create-monitoring-tanaman/{id}', [TanamanController::class, 'create_monitoring_tanaman']);
        
        Route::get('monitoring-talas/{id_tanaman}', [TalasController::class, 'index_pertanaman']);

        Route::resource('monitoring-talas', TalasController::class);
       
        
        Route::get('monitoring-talas-pertanaman/{id}', [TalasController::class, 'edit_pertanaman']);
        Route::patch('monitoring-talas-pertanaman/{id}', [TalasController::class, 'update_pertanaman']);

        Route::get('monitoring-talas/{id}/delete', [TalasController::class, 'destroy']);

        Route::resource('monitoring-alpukat', AlpukatController::class);


        Route::resource('berita', BeritaController::class);
        Route::get('berita/{id}/delete', [BeritaController::class, 'destroy']);


        Route::get('tentangkami', [KontakController::class, 'index_tentangkami']);
        Route::patch('tentangkami/{id}', [KontakController::class, 'update_tentangkami']);
    });
});

Route::middleware(['role:mitra'])->group(function () {
    Route::prefix('mitra')->group(function () {

        Route::get('dashboard', [MitraController::class, 'dashboard']);
        Route::get('talas', [MitraController::class, 'talas']);
        Route::get('alpukat', [MitraController::class, 'alpukat']);
        Route::get('profil-mitra', [MitraController::class, 'profilmitra']);
        Route::get('info-mitra', [MitraController::class, 'infomitra']);

        Route::get('simulasi-panen', [MitraController::class, 'simulasi_panen']);
        Route::get('simulasi-panen', [MitraController::class, 'simulasi_panen']);
        Route::get('tanaman', [MitraController::class, 'tanaman']);
        Route::get('kebunku', [MitraController::class, 'kebunku']);
        Route::get('/term', function () {
            return view('mitra.term-mitra');
        });
    });
  

});
Route::get('/progres', function () {
    return view('mitra.progres');
});