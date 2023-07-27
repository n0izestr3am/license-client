<style type="text/css">
.alert {
    color: #fff;
    border: none;
    padding: 19px 20px 25px !important;
}

</style>

<?php
//tgl 24 ubah otomatis jadi 1

use Carbon\Carbon;
$chek = \n0izestr3am\AppLicenseClient\Models\LicenseSerial::where('id', 1)->first();
$todayDate = Carbon::now()->format('d');
if ($chek && $chek->status == 3){
?>

<div id="banner" class="alert alert-warning alert-dismissible" style="opacity: 0.7;">
    <a href="#" class="mt-2 close" data-dismiss="alert" aria-label="close">&times;</a>
    <div class="bg-white p-2 float-left text-dark mr-2" style="border-radius: 0.4rem;font-family: sans-serif;">
    <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>VPS Payment Reminder!</strong></div>
    <div class="mt-2">Tagihan anda sudah jatuh tempo silahkan lakukan pembayaran </div>

  </div>
<?php

}

 ?>
 <script>
var myVar = setInterval(myTimer, 3000);

function myTimer() {
    $("#banner").fadeOut();
}
</script>