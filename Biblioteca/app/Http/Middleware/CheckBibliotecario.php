<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBibliotecario
{
     /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->tipo == 'bibliotecario') {
            return $next($request);
        }

        // Redireciona o usuário se ele não for um bibliotecário
        return abort(403, 'Acesso Negado');
    }
}
