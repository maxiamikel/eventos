<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservasController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/eventos/novo', [EventController::class, 'index'] );
Route::get('/eventos/listar', [EventController::class, 'listar'] );
Route::get('/eventos/reservar/{id}', [ReservasController::class, 'reservar']);
Route::get('/eventos/{id}', [EventController::class, 'show']);
Route::get('/enderecos', [EnderecoController::class,'index']);




Route::get('/usuarios/cadastrar', [UserController::class, 'create']);
Route::get('/usuarios', [UserController::class, 'index']);

Route::post('/eventos',[EventController::class,'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
