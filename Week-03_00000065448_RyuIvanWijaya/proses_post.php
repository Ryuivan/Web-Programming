<?php
if (!isset($_POST["nama"]) || !isset($_POST["kelamin"]) || !isset($_POST["lahir"]) || !isset($_POST["tanggal"]) || !isset($_POST["email"]) || !isset($_POST["alamat"]) || !isset($_POST["prodi"]) || !isset($_POST["hobi"])) {
    header("Location: form_post.php");
    exit;
}

$hobi = $_POST["hobi"];
$hobiSelected = implode(", ", $hobi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses_post</title>
</head>

<body>
    <h1>User Registration Data</h1>
    <p>
        Nama: <?= $_POST["nama"]; ?><br>
        Jenis Kelamin: <?= $_POST["kelamin"]; ?><br>
        Tempat Lahir: <?= $_POST["lahir"]; ?><br>
        Tanggal Lahir: <?= $_POST["tanggal"]; ?><br>
        Email: <?= $_POST["email"]; ?><br>
        Alamat: <?= $_POST["alamat"]; ?><br>
        Program Studi: <?= $_POST["prodi"]; ?><br>
        Hobi: <?= $hobiSelected; ?>
    </p>
</body>

</html>
