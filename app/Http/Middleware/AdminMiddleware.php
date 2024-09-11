<?php

namespace App\Http\Middleware;

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
        // if($request->session()->has('authId')){
        //     return $next($request);
        // }else{
        //     return redirect('admin')->with('error', 'You need to log in first.');
        // }
        if(!Session()->has('authId')){
            return redirect('admin')->with('error','You have to login first.');
        }
        return $next($request);
    }
}
