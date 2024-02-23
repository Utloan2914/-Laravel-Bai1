<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class ProductPermission
{
/**
* Handle an incoming request.
*
* @param \Illuminate\Http\Request $request
* @param \Closure $next
* @return mixed I
*/
public function handle(Request $request, Closure $next)
{
    //echo 'Request product admin';
    return $next($request);
}
}