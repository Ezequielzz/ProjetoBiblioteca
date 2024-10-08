@extends('layouts.master')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="forms" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="forms" href="{{ route('cadastro') }}">Cadastro</a>
                </li>
                @if (Auth::check())
                    @if (Auth::user()->tipo === 'bibliotecario')
                        <li class="nav-item">
                            <a class="nav-link" id="forms" href="{{ route('livros.index') }}">Livros</a>
                        </li>
                    @else
                    @endif
                @endif
                <li class="nav-item">
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" id="forms" href="{{ route('emprestimos.index') }}">Emprestimos</a>
                    </li>
                        <form action="{{ route('usuarios.logout') }}" method="post">
                            @csrf
                            <input type="submit" value="Sair">
                        </form>
                    @endif
            </ul>
        </div>
    </div>
</nav>
