<?php
class Produk {
  public function __construct(){
    echo "Constructor dijalankan... <br>";
  }

}
$produk01 = new Produk();
$produk02 = new Produk();

class Barang {
  public function __construct(){
    echo "Constructor dijalankan... <br>";
  }

  public function __destruct(){
    echo "Destructor dijalankan... <br>";
  }
}
$barang01 = new Barang();
$barang01 = null;
echo "Program selesai <br>";
