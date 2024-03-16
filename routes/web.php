<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManajemenController;

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
    return view('index');
});

Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/sewa', [SewaController::class, 'index']);
Route::post('/sewa', [SewaController::class, 'store']);

route::get('/login', [LoginController::class, 'index'])->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/register', [RegisterController::class, 'index']);
route::post('/register', [RegisterController::class, 'store']);

route::get('/manajemen', [ManajemenController::class, 'index']);
route::post('/manajemen', [ManajemenController::class, 'store']);