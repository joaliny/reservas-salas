<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsGestor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    
    public function handle($request, Closure $next)
{
    if (auth()->user()->role != 'gestor') {
        return redirect('/home')->with('error', 'Acesso negado. Apenas gestores podem acessar esta página.');
    }

    return $next($request);
}

}
