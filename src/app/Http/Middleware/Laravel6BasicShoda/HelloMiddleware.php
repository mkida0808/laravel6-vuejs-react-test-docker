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
        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $response->setContent($content);
        return $response;
        // $dataFromMiddleware = [
        //     ['name' => '山田たろう', 'mail' => 'taro@yamada'],
        //     ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
        //     ['name' => '鈴木さちこ', 'mail' => 'sachiko@happy'],
        //     ['name' => 'ハローミドルウェア', 'mail' => 'middleware@hello'],
        //     ['name' => 'chapter4', 'mail' => 'chapter4@middle'],
        // ];
        // $request->merge(['dataFromMiddleware' => $dataFromMiddleware]);
        // return $next($request);
    }
}
