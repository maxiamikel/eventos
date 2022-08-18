<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/eventos/novo', [EventController::class, 'index'] );
Route::get('/eventos/listar', [EventController::class, 'listar'] );
Route::get('/usuarios/cadastrar', [UserController::class, 'create']);
Route::get('/usuarios', [UserController::class, 'index']);

Route::get('/eventos',[EventController::class,'store']);
