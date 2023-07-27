<?php

namespace Database\Seeders;
use n0izestr3am\AppLicenseClient\Models\LicenseSerial;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

//php artisan db:seed --class=gtdsClientsSeeder

class gtdsClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
         $host = config('app.url');
         $name = config('app.name');
         $kota = [
                   [
                    'id'        => '1',
                    'name'      => $name,
                    'domain'    => $host,
                    'email'     => 'asep@gmailssasas.com',
                    'serial'    => '8d8d8-5566-555-66676',
                    ]

                ];
        LicenseSerial::insert($kota);
    }
}
