<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/',[LandingPageController::class,'index']);
Route::get('/login',[AuthController::class,'login']);
Route::post('login-post',[AuthController::class,'postlogin']);

Route::middleware('auth')->group(function () {  
    Route::resource('admin/portfolio',PortfolioController::class);
});
