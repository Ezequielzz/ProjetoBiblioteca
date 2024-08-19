@extends('layouts.master')

@section('content')
    <div>
        <div class="container">
            <h1>Login</h1>
            <form method="post" action="{{ route('login') }}">
                @csrf
        
        
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required autofocus>
                </div>
        
        
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
        
        
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        
    </div>
@endsection