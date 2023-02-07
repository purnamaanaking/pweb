<?php
function foo($a){
  if ($a === 0){
    throw new Exception('Argument tidak bisa diisi angka 0');
  }
  else if ($a < 0){
    throw new Exception("Argument \$a tidak bisa diisi angka negatif");
  }
  else {
    return 1/$a;
  }
}

echo "Sebelum try... <br>";

try {
  echo foo(-10)."<br>";
}
catch (Exception $e) {
  echo "Terjadi error di baris ke-".$e->getTrace()[0]["line"]." dengan keterangan <b>".$e->getMessage()."</b><br>";
}
finally {
  echo "Di dalam finally... <br>";
}

echo "Setelah try... <br>";

