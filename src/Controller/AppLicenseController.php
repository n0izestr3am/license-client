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

         dd('client');
         //return 'jjjjj';

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
