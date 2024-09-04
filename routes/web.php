<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WebController;

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
    return view('welcome');
});

Route::group(['prefix' => 'whatsapp'], function () {
    Route::get('main', [MainController::class, 'index']);
    Route::get('axios', [MainController::class, 'axios'])->name('axios');
    Route::get('ajax', [MainController::class, 'ajax'])->name('ajax');
    Route::get('fetch', [MainController::class, 'fetch'])->name('fetch');
    Route::get('php', [MainController::class, 'php'])->name('php');

});

Route::resource('user', WebController::class);
