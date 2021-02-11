<?php
include("config.php");
include("$code.php");


        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://dev.sellix.io/v1/coupons/' .$codice,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' .$api
            )
        ]);
        $ciao=curl_exec($curl);
        curl_close($curl);

  $a=json_decode($ciao);


$used = $a->data->coupon->used;
?>
