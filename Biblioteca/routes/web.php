<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LivroController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota para exibir o formulário de login
Route::get('/login', [UserController::class, 'showLoginForm'])->
name('login');

Route::post('/login', [UserController::class, 'login'])->name('login');

// Rota para exibir o formulário de login
Route::get('/cadastro', [UserController::class, 'showRegisterForm'])->
name('cadastro');

Route::post('/cadastro', [UserController::class, 'register'])->name('cadastro');

// Rota para o dashboard, protegida por autenticação
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('index');

Route::resource('livros', LivroController::class);