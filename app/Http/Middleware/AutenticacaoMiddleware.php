<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo, $perfil)
    {

        if($metodo === 'padrao'){
            echo 'Método de autenticação padrão! '.'<br>';
        }

        if($perfil === 'visitante'){
            echo 'Olá, visitante!'.'<br>';
        }

        if(true) {
            return $next($request);
        }

        return Response('Acessado negado! Forneça uma autenticação!!!');
    }
}
