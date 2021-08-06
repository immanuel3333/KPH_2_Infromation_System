<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!Auth::check()){
            return redirect('login');
        }

        $user=Auth::user();

        if ($user -> level == $role){
            return $next($request);
        }
        return redirect('login')->with('error', "kamu tidak punya akses");
        //return $next($request);
    }
}
