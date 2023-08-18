<?php 

// 1. Koneksi DB
$kunci = mysqli_connect("localhost", "root", "", "umn_genap2122_pemweb_w6");

// 2. Query SQL
// $sql = "SELECT * FROM mahasiswa";
$sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('003', 'John Doel', 'Teknik Komputer')";

// 3. Eksekusi SQL
// $keranjang = mysqli_query($kunci, $sql);
mysqli_query($kunci, $sql);

// 4. Menampilkan hasil Query

// echo "<pre>";
// $data = mysqli_fetch_assoc($keranjang);
// var_dump($data);

// $data = mysqli_fetch_assoc($keranjang);
// var_dump($data);

// while ($data = mysqli_fetch_assoc($keranjang)) {
//     echo $data['nama'];
//     echo "<br>";
// }

?>