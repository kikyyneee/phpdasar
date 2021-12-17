<?php 

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
//ambil data dari tabel mahasiswa (query)
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");


//ambil data mahasiswa dari object result (fetch)
//mysqli_fetch_row() | mengembalikan array numeric
//mysqli_fetch_assoc() | mengembalikan array assosiatif
//mysqli_fetch_array() | mengembalikan keduanya
//mysqli_fetch_object() | mengembalikan object no key numeric/assoc

// while($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);
// }

// if(!$result){
//     echo mysqli_error($conn);
// }
// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing"0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i= 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>

    <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>