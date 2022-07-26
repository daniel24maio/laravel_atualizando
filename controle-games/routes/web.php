<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/games', [\App\Http\Controllers\GamesController::class, 'index']);
Route::get('/games/criar', [\App\Http\Controllers\GamesController::class, 'create']);
Route::post('/games/salvar', [\App\Http\Controllers\GamesController::class, 'store']);

