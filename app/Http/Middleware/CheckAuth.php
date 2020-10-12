<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuth
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
        // if(!$request->session()->has('logged_in')) return view('authh.loginn');
        // if(now()->format('s')%2){
        //     return $next($request);
        // }
        if($request->session()->has('logged_in')){
            return $next($request);
        }
        // else if(!$request->session()->has('logged_in')){
        //     return response()->view('test');
        // }
        // else{
        //     return response()->view('authh.loginn');
        // }
        // dd(now()->format('s'));
        return response()->view('authh.loginn');
    }
}
