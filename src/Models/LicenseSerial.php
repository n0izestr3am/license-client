<?php

namespace n0izestr3am\AppLicenseClient\Models;

use Illuminate\Database\Eloquent\Model;

class LicenseSerial extends Model
{
	protected $table = 'gtds_clients';
    protected $fillable = ['name','domain','phone_number','address','serial','expired','status'];	
}
