<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\TrendingController;
use App\HTTP\Controllers\TerbaruController;
use App\HTTP\Controllers\OldController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/terbaru', [TerbaruController::class, 'index']);
Route::get('/terbaru/detail/{terbaruu}', [TerbaruController::class, 'show']);

Route::get('/trending', [TrendingController::class, 'index']);
Route::get('/trending/detail/{tren}', [TrendingController::class, 'show']);

Route::get('/old', [OldController::class, 'index']);
Route::get('/old/detail/{lama}', [OldController::class, 'show']);
