<?php

namespace Gestao_Assistencias\Http\Middleware;

use Closure;

class Authenticate
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
       
        if(auth()->check()) {
            $user_id =  auth()->user()->id;
            define('authenticated_user_id' ,$user_id);
            return $next($request);
        }
        // return redirect('login'); // this code is not working

        return redirect()->guest('/');
    }
}
