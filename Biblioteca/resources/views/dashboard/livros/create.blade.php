@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <div class="container">
        <h1 class="my-4">Cadastrar Livro</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('livros.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" class="form-control" placeholder="Título">
            </div>


            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" class="form-control" placeholder="Autor"></input>
            </div>


            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" class="form-control" placeholder="Categoria">
            </div>


            <div class="form-group">
                <label for="disponibilidade">Disponibilidade:</label>
                <select name="disponibilidade" class="form-control">
                    <option value="disponivel">Disponível</option>
                    <option value="indisponivel">Indisponível</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

@endsection
