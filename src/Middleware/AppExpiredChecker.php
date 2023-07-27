<?php

namespace n0izestr3am\AppLicenseClient\Middleware;

use Closure;
use Redirect;

class AppExpiredChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
     public function handle($request, Closure $next)
    {

         return $next($request);
    }


}
