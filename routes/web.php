<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\UsuariosController::class, 'index'])->name('home');
