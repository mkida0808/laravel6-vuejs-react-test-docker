<?php

namespace App\Http\Middleware\Laravel6AdvancedShoda;

use Closure;

class HelloMiddleware
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
        // $data = [
        //     'hello' => 'Hello! This is Middleware!',
        //     'bye' => 'Good-bye, Middleware...',
        // ];
        // $request->merge($data);
        return $next($request);
    }
}
