<?php
/**
 * 获取用户的浏览记录
 */
namespace App\Http\Middleware;

use Closure;

class GoodRecord
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if ($request->session()->has('user_id')) {
            // 添加到数据库
        }
        //cookie('name', '学院君', 24);
        return $response;
    }
}
