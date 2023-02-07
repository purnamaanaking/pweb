<?php
spl_autoload_register(function ($className) {
  $fileName = strtolower("$className.php");

  if (file_exists($fileName)) {
    require $fileName;
  } else {
    die ("File $fileName tidak tersedia");
  }
});

$produk01 = new Mobil("Toyota");
echo $produk01->getInfo();

echo "<br>";

$produk02 = new SepedaMotor("Yamaha");
echo $produk02->getInfo();

echo "<br>";