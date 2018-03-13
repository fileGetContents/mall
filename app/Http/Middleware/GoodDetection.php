<?php
/**
 * 检测当前商品状态
 */
namespace App\Http\Middleware;

use Closure;
use App\Models\Good;

class GoodDetection
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
        $id = is_null($request->id) ? 15 : $request->id;
        $good = Good::find($id);
        if (is_null($good)) {
            return abort(404);
        }
        if ($good->good_num == 0) {
            return abort(404);
        }
        return $next($request);
    }
}
