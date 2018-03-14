<?php
// 检查是否有存在地址
namespace App\Http\Middleware;

use Closure;
use App\Models\Address;

class hasAddress
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
        if ($request->session()->has('user_id')) {
            $address = Address::where('user_id', session('user_id'))->first();
            if (is_null($address)) {
                return redirect('personal/address');
            } else {
                return $next($request);
            }
        } else {
            return redirect('user/login');
        }
    }
}
