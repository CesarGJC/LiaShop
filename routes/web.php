<?php

use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


//home
Route::get('/', function () {
    return view('home');
});
//Dashboard
Route::get('/Dashboard', function () {
    return view('dashboard');
})->name('somos');
//Login y logout
Route::post('/login', [SessionController::class, 'store'])
    ->name('login.store');

Route::get('/login', [SessionController::class, 'create'])
    ->name('login.index');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->name('login.destroy');
//Registrar
Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register.index');
//Quienes somos
Route::get('/QuienesSomos', function () {
    return view('somos');
})->name('somos');
//Que hacemos
Route::get('/QueHacemos', function () {
    return view('hacemos');
})->name('hacemos');