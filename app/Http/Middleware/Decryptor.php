<?php

namespace App\Http\Middleware;

use Closure;
use Crypt;

class Decryptor
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
        $request->id=Crypt::decrypt($request->id);
        return $next($request);
    }
}
