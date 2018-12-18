<?php

namespace App\Http\Middleware;

use Closure;

class CekRole extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('bnpb.login');
        }
    }
}
