<?php 

// Form data:
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];

// 1
$dsn = "mysql:host=localhost;dbname=umn_genap2122_pemweb_w6";
$kunci = new PDO($dsn, "root", "");

// 2
$sql = "INSERT INTO mahasiswa (nim, nama, prodi)
        VALUES (?, ?, ?)";

// $sql = "INSERT INTO mahasiswa (nim, nama, prodi)
//         VALUES ('{$nim}', '{$nama}', '{$prodi}')";

// 3
// $kunci->query($sql);

$stmt = $kunci->prepare($sql);
$data = [$nim, $nama, $prodi];
$stmt->execute($data);

?>