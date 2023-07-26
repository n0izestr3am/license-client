<?php

namespace n0izestr3am\AppLicenseClient\Facades;

use Illuminate\Support\Facades\Facade;

class AppLicenseClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \n0izestr3am\AppLicenseClient\Func\License::class;
    }
}
