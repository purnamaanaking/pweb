<?php
abstract class Barang {
  abstract public function cekMerek();
}

class Tv extends Barang{
  public function cekMerek(){
    return "Polytron";
  }
}

class MesinCuci extends Barang{
  public function cekMerek(){
    return "Electrolux";
  }
}

class LemariEs extends Barang{
  public function cekMerek(){
    return "Sharp";
  }
}

$produk01 = new Tv();
$produk02 = new MesinCuci();
$produk03 = new LemariEs();

function tampilkanMerek($objectProduk){
   return $objectProduk->cekMerek(). "<br>";
}

echo tampilkanMerek($produk01);
echo tampilkanMerek($produk02);
echo tampilkanMerek($produk03);
