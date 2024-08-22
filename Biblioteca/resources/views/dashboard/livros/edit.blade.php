@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <div class="container">
        <h1 class="my-4">Editar Livro</h1>


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


        <form action="{{ route('livros.update', $livro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" class="form-control" value="{{ $livro->titulo }}">
            </div>


            <div class="form-group">
                <label for="autor">Autor:</label>
                <input name="autor" class="form-control" value="{{ $livro->autor }}"></input>
            </div>


            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" class="form-control" value="{{ $livro->categoria }}">
            </div>


            <div class="form-group">
                <label for="disponibilidade">Disponibilidade:</label>
                <select name="disponibilidade" id="disponibilidade" class="form-control" required>
                    <option value="disponivel" {{ $livro->disponibilidade == 'disponivel' ? 'selected' : '' }}>Disponível</option>
                    <option value="indisponivel" {{ $livro->disponibilidade == 'indisponivel' ? 'selected' : '' }}>Indisponível</option>
                </select>
            </div>
            

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

@endsection
