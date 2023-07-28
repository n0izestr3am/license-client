<?php

namespace n0izestr3am\AppLicenseClient\Middleware;
use n0izestr3am\AppLicenseClient\Models\LicenseSerial;
use App\Models\User;
use Auth;
use Closure;
use Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

            $chek =  LicenseSerial::where('id', 1)->first();
            $tgl = Carbon::parse($chek->date)->format('Y-m-d');
            $pesan = 'Maintance Mode';
            $sekarang = Carbon::today()->format('Y-m-d');

            if ($chek->status == 5) {
                 return abort(503,$pesan);
                    }

            return $next($request);

    }

}
