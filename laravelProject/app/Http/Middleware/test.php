<?php

namespace App\Http\Middleware;

use Closure;

class test
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
    //   $ip=$request->ip();
    // //   $ip= '164.162.1.1';
    //   if($ip=='::1')
    //   {
    //       return redirect('/hello');
    //   }

        return $next($request);
    }
}
