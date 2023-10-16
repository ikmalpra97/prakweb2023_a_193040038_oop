<?php

//jualan produk
//komik dan game

class Produk {

    public  $judul = "judul",
            $penulis =  "penulis",
            $penerbit = "penerbit",
            $harga = 0;
}

$produk1 = new produk();
$produk2 = new produk();
// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "Komik : $produk3->penulis, $produk3->penerbit";