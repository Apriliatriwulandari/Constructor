<?php
class Baju{
  public $merk,
          $ukuran,
          $harga;
      
  public function getcetak(){
    return "$this->merk, $this->ukuran, $this->harga";
    }
    public function __construct($merk="merk", $ukuran="ukuran", $harga=0){
        $this->merk = $merk;
        $this->ukuran = $ukuran;
        $this->harga = $harga;
    }
  }

  $Baju1 = new Baju("Cardinal","L",120000);
  $Baju2 = new Baju("Exist","S",100000);

  echo "Nama Baju: ", $Baju1->getcetak();
  echo "<br>";
  echo "Nama Baju: ", $Baju2->getcetak();
?>