<?php

namespace App\Http\Middleware\Laravel6BasicShoda;

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
        $dataFromMiddleware = [
            ['name' => '山田たろう', 'mail' => 'taro@yamada'],
            ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
            ['name' => '鈴木さちこ', 'mail' => 'sachiko@happy'],
            ['name' => 'ハローミドルウェア', 'mail' => 'middleware@hello'],
            ['name' => 'chapter4', 'mail' => 'chapter4@middle'],
        ];
        $request->merge(['dataFromMiddleware' => $dataFromMiddleware]);
        return $next($request);
    }
}
