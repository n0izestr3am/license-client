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

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         \Route::middleware('api')->any(config('n0izestr3am.app_license_client.license_route'),'n0izestr3am\AppLicenseClient\Controller\AppLicenseController@check')->name(config('n0izestr3am.app_license_client.route_name'));

        $this->publishes([
            __DIR__.'/../config/n0izestr3am/' => config_path('n0izestr3am')],'app-license-client');

         $this->publishes([
            __DIR__.'/../migrations/' => database_path('migrations'),
        ], 'app-license-client');

        $this->publishes([
            __DIR__.'/../seeders/' => database_path('seeders'),
        ], 'app-license-client');

        
    }
}
