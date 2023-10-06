<?php
    require_once __DIR__.'/vendor/autoload.php';
    use OTPHP\TOTP;

    $otp = TOTP::create('YO6FX5YZD72ASBJ7LUPQI2LIYOHKOJRBLHKLSHBDUUNLMOZUY3SLVVY7JLCMFDX7NZKE6Q2HKXDOWQCKQ7OEJULOPCJY3P3EAYQDQFQ');

    if(!empty($_POST['code'])){
        if($otp->verify(htmlspecialchars($_POST['code']))){
            echo "ok";
        }else{
            echo "Faux";
        }
    }