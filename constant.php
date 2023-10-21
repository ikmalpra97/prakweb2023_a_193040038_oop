<?php

// define('NAMA', 'Ilham Akmal');

// echo NAMA;
// echo "<br>";

// const UMUR = 17;
// echo UMUR;

//perbedaan define dan const
//define harus diletakkan diluar kelas atau global
//const bisa diletakkan di kelas

// class Coba {
//     const NAMA = 'Ilham';
// }

// echo Coba::NAMA;

//magic constant bisa digunakan untuk membuat pesan error lebih detail

// echo __LINE__; //akan menampilkan baris dimana constant ditulis
// echo "<br>";
// echo __FILE__; //akan menampilkan alamat file

// function coba(){
//     return __FUNCTION__;
// }

// echo coba();

class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;