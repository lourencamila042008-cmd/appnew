<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ArtistasController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\BoletasController;
Route::get('/boletas',[BoletasController::class, 'index'])->name('boletas.index');
Route::get('boletas.create',[BoletasController::class, 'create'])->name('boletas.create');
Route::post('boletas.store',[BoletasController::class, 'store']);


Route::get('/evento',[EventoController::class, 'index'])->name('index');
Route::get('evento/create',[EventoController::class, 'create'])->name('evento,create');
Route::post('evento/store',[EventoController::class, 'store']);

Route::get('/artistas', [ArtistasController::class, 'index']);
Route::get('artistas.create', [ArtistasController::class, 'create']);
Route::post('artistas.store', [ArtistasController::class, 'store']);
