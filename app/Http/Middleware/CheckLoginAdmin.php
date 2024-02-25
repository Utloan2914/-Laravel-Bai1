<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class CheckLoginAdmin
{
    /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\Request $request
    * @param \Closure $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next)
    {
        //echo 'Middleware request';
        if (!$this->isLogin()){
            return redirect(route('home'));
        }
        // if ($request->is('admin/*') || $request->is('admin')){ 
        //     echo '<h3>khu vực quản trị</h3>';
        // }
        return $next($request);
    }

    public function isLogin()
    {
        return false;
    }
}