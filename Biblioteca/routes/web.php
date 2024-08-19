<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Rota para exibir o formulário de login
Route::get('/login', [UserController::class, 'showLoginForm'])->
name('login');

// Rota para exibir o formulário de login
Route::get('/cadastro', [UserController::class, 'showRegisterForm'])->
name('cadastro');