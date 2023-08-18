<?php
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form_Get</title>
</head>

<body>
    <h1>User Registration</h1>
    <form action="proses_get.php" method="get">
        <label>Nama</label>
        <input type="text" name="nama" id="">
        <br>
        <label>Jenis Kelamin</label>
        <input type="radio" name="gender" value="m">Laki-laki
        <input type="radio" name="gender" value="f">Perempuan
        <br>
        <label>Program Studi</label>
        <select name="prodi" id="">
            <option value="if">Informatika</option>
            <option value="si">Sistem Informasi</option>
            <option value="tk">Teknik Komputer</option>
        </select>
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>