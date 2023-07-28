# aplikasi licence dan Payment Reminder untuk Internal Klien GTDS

This package based on [app-license-client for Laravel](https://github.com/irfaardy/app-license-client) package.

```bash
   composer require n0izestr3am/license-client
```

```bash
  php artisan migrate --path=vendor/n0izestr3am/license-client/migrations
```

```bash
  php artisan db:seed --class=gtdsClientsSeeder
```

<h2>Laravel Setup </h2>

<h3>Add to config/app.php</h3>

    'providers' => [
        ....
        n0izestr3am\AppLicenseClient\AppLicenseClientServiceProvider::class,
         ];

<h3>Add to config/app.php</h3>

    'aliases' => [
             ....
            'ALC' => n0izestr3am\AppLicenseClient\Facades\AppLicenseClient::class,
    
        ],

  <h2>Publish Vendor</h2>


```bash
  php artisan vendor:publish --tag=app-license-client
```

<h2>Config File</h2>

    config/n0izestr3am/app-license-client.php

<h2>Implementasi Middleware di route</h2>

```php
Route::middleware('expired')->get('/example','TestController@index');
```

<h2>Implementasi Notif di Dashboard</h2>


```php
 @include('vendor.client.notif')
```


