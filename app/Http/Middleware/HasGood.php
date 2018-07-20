<?php

namespace App\Http\Middleware;

use App\Models\Good;
use Closure;

class HasGood
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
        $good = Good::select('good_id')->find($request->id);
        if (is_null($good)) {
            abort(401);
        } else {
            return $next($request);
        }
    }
}
