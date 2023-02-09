<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Wahyu</title>
    <link rel="icon" type="icon/x-icon" href="wahyuw.jpg"
</head>
<body>
<link rel="stylesheet" href="gaya.css">
    <center>
        <h1>Data Mobil</h1>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Nama Peminjam</td>
                <td>Alamat</td>
                <td>Umur</td>
                <td>Keperluan</td>
                <td>Jaminan</td>
                <td>Plat Nomor</td>
                <td>Merek</td>
                <td>Jenis Mobil</td>
                <td>Tahun Mobil</td>
                <td>Tanggal Pinjam</td>
                <td>Tanggal Kembali</td>
                <td>AKSI</td>
</tr>

<?php
include('koneksi.php');
$query = mysqli_query($db, "SELECT * FROM tb_peminjam INNER JOIN tb_mobil
         ON tb_peminjam.id_mobil = tb_mobil.id_mobil");
$no = 1;
foreach ($query as $row):
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_peminjam']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['umur']; ?></td>
    <td><?= $row['keperluan']; ?></td>
    <td><?= $row['jaminan']; ?></td>
    <td><?= $row['plat_nomor']; ?></td>
    <td><?= $row['merek']; ?></td>
    <td><?= $row['jenis_mobil']; ?></td>
    <td><?= $row['tahun_mobil']; ?></td>
    <td><?= $row['tanggal_pinjam']; ?></td>
    <td><?= $row['tanggal_kembali']; ?></td>
    <td>
        <a href="edit.php?id_peminjam=<?= $row['id_peminjam'];?>"><input type="button" name="edit" value="EDIT"></a>
        <a href="hapus.php?id_peminjam=<?= $row['id_peminjam'];?>"><input type="button" name="edit" value="HAPUS"></a>
<?php endforeach ?>
</center>
</table><p>
<td><a href="menu.php"><input type="button" name="menu" value="MENU"></a></td>
<td><a href="tambah.php"><input type="button" name="tambah" value="TAMBAH"></a></td>
</body>
</html>