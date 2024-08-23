<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Middleware\CheckBibliotecario;

// Rotas Públicas
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota para exibir o formulário de login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

// Rota para exibir o formulário de cadastro
Route::get('/cadastro', [UserController::class, 'showRegisterForm'])->name('cadastro');
Route::post('/cadastro', [UserController::class, 'register'])->name('cadastro');

Route::middleware(['auth'])->group(function () {

    Route::get('livros/{livro}', [LivroController::class, 'show'])->name('livros.show');

    Route::get('/emprestimos', [EmprestimoController::class, 'index'])->name('emprestimos.index');
    Route::resource('emprestimos', EmprestimoController::class);

    // Rotas para os empréstimos
    Route::get('/emprestimos', [EmprestimoController::class, 'index'])->name('emprestimos.index');
    Route::resource('emprestimos', EmprestimoController::class);
    Route::post('/emprestimo/add/{livro}', [EmprestimoController::class, 'add'])->name('emprestimo.add');

    // Adicione esta rota dentro do grupo de middleware 'auth'
    Route::post('/emprestimos/devolver/{id}', [EmprestimoController::class, 'devolver'])->name('emprestimos.devolver');
});

Route::resource('/livros', LivroController::class)->middleware(CheckBibliotecario::class)->except('show');


// Rota para logout
Route::post('/logout', [UserController::class, 'logout'])->name('usuarios.logout');
