<?php

namespace App\Http\Middleware\Laravel6AdvancedShoda;

use Closure;
use App\Facades\Laravel6AdvancedShoda\MyService;

class MyMiddleware
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
        // 前処理開始
        $id = rand(0, count(MyService::alldata()));
        MyService::setId($id);
        $merge_data = [
            'id' => $id,
            'msg' => MyService::say(),
            'alldata' => MyService::alldata(),
        ];
        $request->merge($merge_data);
        // 前処理終了

        // 後処理開始
        $response = $next($request);
        $content = $response->content();
        $content .= '<style>
        body { background-color: #eef; }
        p { font-size: 18pt; }
        li { color: red; font-wegiht: bold; }
        </style>';
        $response->setContent($content);
        // 後処理終了

        return $response;
    }
}
