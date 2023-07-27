#Lisensi aplikasi untuk Klien endpoint (Laravel)

This package based on [app-license-client for Laravel](https://github.com/irfaardy/app-license-client) package.


```bash
   composer require n0izestr3am/license-client
```

```bash
  php artisan migrate --path=vendor/n0izestr3am/license-client/migrations
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

<h2>Plugin Settings</h2>

Tambahkan baris ini di file .env<br>
Add this line to file .env

```php
APP_SERIAL_NUMBER=XXXX-XXXX-XXXX-XXXX
APP_LICENSE_ENDPOINT=https://example.com/check/license
```

<h2>Setting Middleware</h2>

Buka file App\Http\Kernel.php<br>
Open file App\Http\Kernel.php<br>
Tambahkan item ini di $routeMiddleware <br>
Add this item in $routeMiddleware

```php
'licenseCheck' => \n0izestr3am\AppLicenseClient\Middleware\AppLicenseChecker::class,
```

<h2>Implementasi di route</h2>

```php
Route::middleware('licenseCheck')->get('/example','TestController@index');
```

