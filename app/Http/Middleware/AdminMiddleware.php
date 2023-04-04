<?php

namespace App\Http\Middleware;
use illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
               
            if(Auth::user()->role == '1'){
              
                return $next($request);
            } else{
                return redirect('/home');
            }
        } else{
                return redirect('/login')-with('message', 'login to access website info');  
        }
         


        
    }
}
