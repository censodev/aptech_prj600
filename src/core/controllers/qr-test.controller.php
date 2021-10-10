<?php
$qr = new QrService();
$qrCode = $qr->generate('abc');
$qrStr = $qrCode->getDataUri();
?>
<img src="<?php echo $qrStr ?>" alt="">

