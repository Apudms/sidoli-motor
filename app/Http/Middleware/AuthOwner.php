<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('utype') === 'OWN') {
            return redirect()->route('owner.dashboard');
        } else {
            // session()->flush();
            // return redirect()->route('login');
            return redirect()->back();
        }
        return $next($request);
    }
}
