<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginMiddleware
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
        //设置过滤或验证规则
        //判断是否登录
        if(session('id')){
            return $next($request);//进入下一请求
        }else{
            return redirect('/admin/login')->with('error','请先登录');
        }
        
    }
}
