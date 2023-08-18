<?php 

// 1
$dsn = "mysql:host=localhost;dbname=umn_genap2122_pemweb_w6";
$kunci = new PDO($dsn, "root", "");

// 2
// $sql = "SELECT * FROM mahasiswa";

$sql = "UPDATE mahasiswa
        SET nama = 'John Wick'
        WHERE nim = '002'";

// 3
// $hasil = $kunci->query($sql);
$kunci->query($sql);

// 4
// echo "<pre>";
// $row = $hasil->fetch(PDO::FETCH_ASSOC);
// var_dump($row);
// $row = $hasil->fetch(PDO::FETCH_ASSOC);
// var_dump($row);

?>