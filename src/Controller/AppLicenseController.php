<?php

namespace n0izestr3am\AppLicenseClient\Controller;
use n0izestr3am\AppLicenseClient\Models\LicenseSerial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class AppLicenseController extends Controller
{
    public function check(Request $request)
    {

            $inputDate =  LicenseSerial::where('id', 1)->first();
            $tgl = Carbon::parse($inputDate->date)->format('Y-m-d');
            $sekarang = Carbon::today()->format('Y-m-d');

            if ($tgl === $sekarang) {
                    return "Tampil Notif";
            }

            return 'oke';



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



public function update(Request $request){

    $clients =  LicenseSerial::find(1);
    $updatedClient = LicenseSerial::where('id', $clients->id)->update($data);
     $dataclient =  LicenseSerial::find(1);
       return response()->json([
        'success' => true,
        'message' => 'Clients updated successfully!',
        'data' =>$dataclient
    ]);

}












}
