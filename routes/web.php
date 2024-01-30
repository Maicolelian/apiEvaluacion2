<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\UsuariosController::class, 'index'])->name('home');
