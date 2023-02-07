<?php
include("file02.php");
include("file03.php");

use KipasAngin\Miyako as Miyako;
use Elektronik\RiceCooker\Maspion as Maspion;

$produk01 = new Miyako\Produk();
echo $produk01->merek;

echo "<br>";

$produk02 = new Maspion\Produk();
echo $produk02->merek;
