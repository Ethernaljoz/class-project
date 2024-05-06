<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userRole): Response
    {
        if(auth()->user()->role ==$userRole){
            
            return $next($request);
        }

        return response()->json(["tu n as pas la permission requise"]);

        // if(!empty(Auth::check())){
        //     return $next($request);
        // }else{
        //     Auth::logout();
        //     return redirect(route('login'));
        // }
    }
}
