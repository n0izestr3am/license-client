<?php

namespace n0izestr3am\AppLicenseClient;

use Illuminate\Support\ServiceProvider;

class AppLicenseClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/n0izestr3am/' => config_path('n0izestr3am')],'app-license-client');

        
    }
}
