@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <h2>{{ $livro->titulo }}</h2>
                <h2>{{ $livro->autor }}</h2>
                <p>{{ $livro->categoria }}</p>
                <p>{{ $livro->disponibilidade }}</p>
    
    
                <form method="POST" action="{{ route('emprestimo.add', $livro->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Fazer Emprestimo</button>
                </form>
            </div>
        </div>
    </div>
@endsection