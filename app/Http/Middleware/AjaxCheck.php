<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class AjaxCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (!\Request::ajax()){
            \App::abort(404);
        }

        return $next($request);
    }
}
