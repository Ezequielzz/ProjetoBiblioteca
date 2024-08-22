@extends('layouts.master')

@section('content')
<x-navbar></x-navbar>
<div class="container">
    <h1 class="my-4">Empréstimos</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID Empréstimo</th>
            <th>Livro</th>
            <th>Data de Empréstimo</th>
            <th>Data de Devolução</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($emprestimos as $emprestimo)
        <tr>
            <td>{{ $emprestimo->id }}</td>
            <td>{{ $emprestimo->livro->titulo }}</td>
            <td>{{ $emprestimo->data_emprestimo }}</td>
            <td>{{ $emprestimo->data_devolucao ?? 'Ainda não devolvido' }}</td>
            <td>
                <form action="{{ route('emprestimos.destroy', $emprestimo->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('emprestimos.edit', $emprestimo->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancelar Empréstimo</button>
                </form>
                <form action="{{ route('emprestimos.devolver', $emprestimo->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Devolver</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
