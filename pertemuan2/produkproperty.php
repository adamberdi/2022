<?php
/*
Adam Berdi RA
203040180
https://github.com/adamberdi/prakweb2021_oophp_203040180
Pertemuan 2 - 12 Januari 2022
Mempelajari Property & Method pada PHP
*/
?>
<?php



class Produk
{
  public $judul = "judl",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getlabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperti = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();
