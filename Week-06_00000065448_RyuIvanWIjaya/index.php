<?php


$dsn = "mysql:host=localhost;dbname=tugas_pemweb_w6";
$kunci = new PDO($dsn, "root", "");

$sql = "SELECT * FROM mahasiswa";

$hasil = $kunci->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS W6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Daftar Mahasiswa</h1>
        <table data-toggle="table" class="text-center">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Foto</th>
                <th>Tindakan</th>
            </tr>
            <?php while ($row = $hasil->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td>
                        <?= $row['nim'] ?>
                    </td>
                    <td>
                        <?= $row['nama'] ?>
                    </td>
                    <td>
                        <?= $row['prodi'] ?>
                    </td>
                    <td>
                        <img src="./img/<?= $row['gambar'] ?>" alt="<?= $row['gambar'] ?>" width="50" height="50">
                    </td>
                    <td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | <a
                            href="hapus.php?id=<?= $row['id'] ?>">Hapus</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>