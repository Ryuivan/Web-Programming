<?php

// Get data from URL:
$id = $_GET["id"];

// 1
$dsn = "mysql:host=localhost;dbname=umn_genap2122_pemweb_w6";
$kunci = new PDO($dsn, "root", "");

// 2
$sql = "SELECT * FROM mahasiswa WHERE id = ?";

// 3
$stmt = $kunci->prepare($sql);
$data = [$id];
$stmt->execute($data);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>individu.php</title>
</head>

<body>
    <p>NIM:
        <?= $row["nim"] ?><br>
        Nama:
        <?= $row["nama"] ?><br>
        Prodi:
        <?= $row["prodi"] ?>
    </p>
</body>

</html>