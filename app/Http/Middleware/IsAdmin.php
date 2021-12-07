<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //vérifier si l'utilisateur connecté est administrateur (admin=1)
        if (auth()->user()->admin==1){
            //Si oui continuer jusqu'à la requete
            return $next($request);
        }else{
            //Sinon renvoyez  une 403
           abort(403);
        }



    }
}
