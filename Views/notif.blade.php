<style type="text/css">
.alert {
    color: #fff;
    border: none;
    padding: 19px 20px 25px !important;
}

</style>
<?php
    use Carbon\Carbon;
    $todayDate = Carbon::now()->format('d');
    $chek = \n0izestr3am\LicenseClient\Models\LicenseSerial::where('id', 1)->first();
    $contractDateBegin = 1;
    $contractDateEnd = 31;
    $payment_stat = $chek->tgl_notif ?? 1;
    $notif = $chek->notif ?? 'Tagihan anda sudah jatuh tempo silahkan lakukan pembayaran ';
    $judul_notif = $chek->judul_notif ?? 'VPS Payment Reminder!';
if (($payment_stat == $todayDate) && ($todayDate >= $contractDateBegin) && ($todayDate <= $contractDateEnd)){
?>
<div class="alert alert-warning alert-dismissible" style="opacity: 0.7;">
    <a href="#" class="mt-2 close" data-dismiss="alert" aria-label="close">&times;</a>
    <div class="bg-white p-2 float-left text-dark mr-2" style="border-radius: 0.4rem;font-family: sans-serif;">
    <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>{{ $judul_notif }}</strong></div>
    <div class="mt-2">{{ $notif }} </div>

    </div>
<?php

}

 ?>
<script>
var myVar = setInterval(SlideBanner, 5000);
function SlideBanner() {
    $("#banner").fadeOut();
}
</script>