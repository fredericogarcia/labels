<?php
use \Milon\Barcode\DNS1D;

$d = new DNS1D();
$d->setStorPath(__DIR__."/cache/");
echo $d->getBarcodeHTML("50000", "C128");

 ?>
