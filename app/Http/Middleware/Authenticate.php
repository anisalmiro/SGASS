<?php
 
namespace Gestao_Assistencias\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */

/**
  *  protected function redirectTo($request)
  *  {
 *       if (! $request->expectsJson()) {
  *          return route('PainelInicial');
   *     }
   * }
     */
    
        /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
//        public function handle($request, Closure $next)
//      {
//       
//        if(auth()->check()) {
//            $user_id =  auth()->user()->id;
//            define('authenticated_user_id' ,$user_id);
//            return $next($request);
//        }
//        // return redirect('login'); // this code is not working
//
//        return redirect()->guest('/');
//    }
    
}
