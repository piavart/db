<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectNoAuth
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
//        $i = 1;
//        if (!Auth::check()) {
//            return redirect('/login');
//        }elseif(Auth::user()->company_id == 0){
//            return redirect('/company/create');
//        }
//        return $next($request);
    }
}
