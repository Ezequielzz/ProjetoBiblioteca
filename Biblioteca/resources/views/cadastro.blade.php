@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    {{-- formulario --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h1>Registrar-se</h1>
        <form method="post" action="{{ route('cadastro') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" required>
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data Nascimento</label>
                <input type="text" name="data_nascimento" class="form-control" placeholder="dd/mm/aaaa" required>
            </div>


            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" class="form-control" required>
            </div>


            <div class="form-group">
                <label for="password_confirmation">Confirme a Senha</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-primary">Registrar-se</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection
