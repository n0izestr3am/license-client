<?php

namespace n0izestr3am\AppLicenseClient\Controller;
use n0izestr3am\AppLicenseClient\Models\LicenseSerial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppLicenseController extends Controller
{
    public function check(Request $request)
    {

         dd('Chek');
         //return 'jjjjj';

    }

    public function getClient(Request $request)
    {
          $clients = LicenseSerial::where('id',1)->first();
            return response()->json([
                'status' => true,
                'message' => "Success",
                'data' => $clients
            ], 200);
       //  dd('client');


    }


    public function save(Request $request)
        {
            $post = LicenseSerial::create($request->all());
            return response()->json([
                'status' => true,
                'message' => "Post Created successfully!",
                'post' => $post
            ], 200);
        }





}
