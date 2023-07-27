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

            $inputDate =  LicenseSerial::where('id', 1)->first();
            $tgl = Carbon::parse($inputDate->date)->format('Y-m-d');
            $sekarang = Carbon::today()->format('Y-m-d');
            if ($tgl === $sekarang) {
                      LicenseSerial::where('id', $inputDate->id)
                      ->update(['status' => 3
                     ]);
                    }else{
                  LicenseSerial::where('id', $inputDate->id)
                  ->update(['status' => 0
                 ]);

            }


             return $next($request);

    }

}
