<?php

use App\Http\Controllers\sitioController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('landing/home');
});

Route::get('/pc', function () {
    return view('landing/pc');
});

Route::get('/ps', function () {
    return view('landing/ps');
});

Route::get('/psp', function () {
    return view('landing/psp');
});*/

Route::prefix('landing')->group(function () {
    Route::get('home', [sitioController::class, 'home']);
    Route::get('pc', [sitioController::class, 'pc']);
    Route::get('ps', [sitioController::class, 'ps']);
    Route::get('psp', [sitioController::class, 'psp']);
    Route::get('viewtable', [sitioController::class, 'viewtable']);
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
});
