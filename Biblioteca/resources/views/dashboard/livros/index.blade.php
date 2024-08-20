@extends('layouts.master')

@section('content')
<x-navbar></x-navbar>
<div class="container">
    <h1 class="my-4">Livros</h1>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <a class="btn btn-success mb-2" href="{{ route('livros.create') }}"> Criar Novo Livro</a>

    
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoria</th>
            <th>Disponibilidade</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($livros as $livro)
        <tr>
            <td>{{ $livro->id }}</td>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->autor }}</td>
            <td>{{ $livro->categoria }}</td>
            <td>{{ $livro->disponibilidade }}</td>
            <td>
                <form action="{{ route('livros.destroy', $livro->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('livros.edit', $livro->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection