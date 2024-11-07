<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckGestorRole
{
    public function handle($request, Closure $next)
    {
        // Verifica se o usuário está autenticado e se é um gestor
        if (Auth::check() && Auth::user()->role == 'gestor') {
            return $next($request);
        }

        // Se não for gestor, redireciona para a página inicial
        return redirect('/')->with('error', 'Acesso negado');
    }
}
