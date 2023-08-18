<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_post</title>
</head>

<body>
    <h1>User Registration</h1>
    <form action="proses_post.php" method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="kelamin">Jenis Kelamin: </label>
        <input type="radio" name="kelamin" id="kelamin" value="Laki-laki">Laki-laki
        <input type="radio" name="kelamin" id="kelamin" value="Perempuan">Perempuan
        <br>
        <label for="nama">Tempat lahir: </label>
        <input type="text" name="lahir" id="lahir">
        <br>
        <label for="nama">Tanggal lahir: </label>
        <input type="date" name="tanggal" id="tanggal">
        <br>
        <label for="nama">Email: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="alamat">Alamat: </label>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        <br>
        <label for="prodi">Program studi: </label>
        <select name="prodi" id="prodi">
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
        </select>
        <br>
        <label for="hobi">Hobi: </label>
        <input type="checkbox" name="hobi[]" id="hobi1" value="Makan">Makan
        <input type="checkbox" name="hobi[]" id="hobi2" value="Minum">Minum
        <input type="checkbox" name="hobi[]" id="hobi3" value="Tidur">Tidur
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>