<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, 'cards']);
//gia creata con la riga 21 insieme ad altre 5 Route::get('/cards',[ComicController::class, 'index']);

Route::resource('comics', ComicController::class);