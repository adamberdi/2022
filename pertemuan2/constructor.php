<?php
/*
Adam Berdi RA
203040180
https://github.com/adamberdi/prakweb2021_oophp_203040180
Pertemuan 2 - 11 Januari 2022
Mempelajari Constructor pada PHP
*/
?>
<?php


class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);
