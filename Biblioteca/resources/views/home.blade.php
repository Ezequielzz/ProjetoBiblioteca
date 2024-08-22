@extends('layouts.master')

@section('content')
    <x-navbar></x-navbar>
    <div class="row">
        @foreach ($livros as $livro)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $livro->titulo }}</h5>
                        <h5 class="card-title">{{ $livro->autor }}</h5>
                        <p class="card-text">{{ $livro->categoria }}</p>
                        <p class="card-text">{{ $livro->disponibilidade }}</p>

                        @if ($livro->disponibilidade === 'disponivel')
                            <a href="{{ route('livros.show', $livro->id) }}" class="btn btn-primary">Ver Livro</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
