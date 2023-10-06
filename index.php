<?php
    require_once __DIR__.'/vendor/autoload.php';
    use OTPHP\TOTP;

    $otp = TOTP::create('YO6FX5YZD72ASBJ7LUPQI2LIYOHKOJRBLHKLSHBDUUNLMOZUY3SLVVY7JLCMFDX7NZKE6Q2HKXDOWQCKQ7OEJULOPCJY3P3EAYQDQFQ');
    $otp->setLabel('Souhil');
    $chl = $otp->getProvisioningUri();
    $link = "https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=".$chl;
    // echo $otp->now();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Double authentification avec Google Authenticator</title>
  <style>
    body {
      text-align: center;
      padding: 50px;
    }
    h1, p {
      margin-bottom: 20px;
    }
    #qrcode {
      display: inline-block;
    }
  </style>
</head>
<body>
  <h1>Double authentification avec Google Authenticator</h1>
  <p>Scanner le QR code ci-dessous dans Google Authenticator :</p>
    <img src="<?php echo $link ?>">
    <br>
    <form action="verify.php" method="POST">
        <input type="text" name="code" class="form-control">
        <br><br>
        <button type="submit" class="btn btn-success" >Verifier</button>
    </form>
</body>
</html>
