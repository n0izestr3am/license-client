<?php

namespace n0izestr3am\AppLicenseClient;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use n0izestr3am\AppLicenseClient\Middleware\AppExpiredChecker;
class AppLicenseClientServiceProvider extends ServiceProvider
{


     protected $defer = false;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishFiles();
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->middlewareGroup('expired', [AppExpiredChecker::class]);

    }

    protected function publishFiles()
    {
        $this->publishes([
            __DIR__.'/../config/n0izestr3am/' => config_path('n0izestr3am')],'app-license-client');

        //  $this->publishes([
        //     __DIR__.'/../migrations/' => database_path('migrations'),
        // ], 'app-license-client');

        $this->publishes([
            __DIR__.'/../seeders/' => database_path('seeders'),
        ], 'app-license-client');

       $this->publishes([
            __DIR__.'/../Views' => base_path('resources/views/vendor/client'),
        ], 'app-license-client');

    }








}
