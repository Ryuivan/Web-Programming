<?php 

$id = $_GET["id"];

$dsn = "mysql:host=localhost;dbname=umn_genap2122_pemweb_w6";
$kunci = new PDO($dsn, "root", "");

$sql = "SELECT * FROM mahasiswa WHERE id = ?";

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
    <title>Edit.php</title>
</head>
<body>
    <form action="">
        
    </form>
</body>
</html>