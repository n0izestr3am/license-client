<?php

namespace n0izestr3am\AppLicenseClient\Middleware;

use Closure;
use n0izestr3am\AppLicenseClient\Facades\AppLicenseClient as AppLicense;

class AppLicenseChecker
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
        if(AppLicense::check()){
            return $next($request);
        }
        $license = AppLicense::get();
        return abort(503,$license->message);

    }
}
