<?php

// PUBLIC ---------------------------------
class Produk {
  var $merek;

  public function hello(){
    return "Ini adalah Produk";
  }
}
$produk01 = new Produk();
$produk01->merek = "Asus";
echo $produk01->merek;
echo "<br>";
echo $produk01->hello();


// PRIVATE ---------------------------------
class Barang {
  private $merek;
  
  public function setMerek($merek){
    $this->merek = $merek;
  }

  public function getMerek(){
    return $this->merek;
  }
}
$barang01 = new Barang();
$barang01->setMerek("Asus");
echo $barang01->getMerek();   

// PROTECTED ---------------------------------
class Item {
  protected $merek;

  protected function hello(){
    return "Ini adalah Item";
  }
}
$item01 = new Item();
$item01->merek = "Asus"; // Fatal error: Uncaught Error: Cannot access protected property Produk::$merek
echo $item01->merek; // Fatal error: Uncaught Error: Cannot access protected property Produk::$merek
echo $item01->hello(); // Fatal error: Uncaught Error: Call to protected method Produk::hello()

// INHERITANCE PROTECTED ---------------------------------
class Kendaraan {
  protected $merek = "Avanza";

  protected function hello(){
    return "Ini adalah Kendaraan";
  }
}
class Motor extends Kendaraan{
  public function helloMotor(){
    return $this->hello()." Mobil ".$this->merek;
  }
}
$kendaraan01 = new Motor();
echo $kendaraan01->helloMotor();

// INHERITANCE PRIVATE ---------------------------------
class Vehicle {
  private $merek = "Xenia";
  
  private function hello(){
    return "Ini adalah Vehicle";
  }
}
  
class Car extends Vehicle {
  public function helloCar(){
    return $this->hello()." Car ".$this->merek;
  }
}

$vehicle01 = new Car();
echo $vehicle01->helloCar(); // Fatal error: Uncaught Error: Call to private method Produk::hello() from context 'Xenia'
