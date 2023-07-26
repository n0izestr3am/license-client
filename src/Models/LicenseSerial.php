<?php

namespace n0izestr3am\AppLicenseClient\Models;

use Illuminate\Database\Eloquent\Model;

class LicenseSerial extends Model
{
	protected $table = 'license_serials';
    protected $fillable = ['name','domain','phone_number','address','serial','expired','status'];	
}
