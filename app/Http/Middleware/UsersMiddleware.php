<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Usuarios;

class UsersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        

        if(!auth()->check()){
            return redirect('/');
        }

        /*if(auth()->Usuarios()){
            return redirect('welcome');
        }*/

        return $next($request);
    }
}
