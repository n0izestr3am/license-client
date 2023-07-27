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
             $clients = [
                   [
                    'id'        => '1',
                    'name'      => 'Bandung',
                    'email'      => 'asep@gmail.com'  ,

                    ]

                ];
        LicenseSerial::insert($clients);
    }
}
