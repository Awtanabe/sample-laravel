<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        // ## 前処理のケース
        $data = [
            ['name' => 'taro' , 'mail' => 'tara@yamada'],
            ['name' => 'hanako' , 'mail' => 'hanako@yamada'],
            ['name' => 'sachico' , 'mail' => 'sachico@yamada']
        ];

        # NOTE: リクエストにマージしている
        $request-> merge(['data'=> $data]);
        return $next($request);
        ## 後処理のケース
        // $response = $next($request);
        // htmlを取得している
        // $content = $response->content();
        // $pattarn = '/<middleware>(.*)<\/middleware>/i';
        // $replace = '<a href="http://$1">$1</a>';
        // $content = preg_replace($pattarn, $replace, $content);
        // $response ->setContent($content);
        // return $response;
    }
}
