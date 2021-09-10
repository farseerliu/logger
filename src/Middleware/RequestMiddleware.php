<?php
namespace FarseerLiu\Logger\Middleware;

use Closure;
use Illuminate\Http\Client\Request;

class RequestMiddleware
{
    public function handle(Request $request,Closure $next)
    {
        $request->headers()->set('RequestId','asdasdfasdf');
        var_dump($request);
        return $next($request);
    }
}