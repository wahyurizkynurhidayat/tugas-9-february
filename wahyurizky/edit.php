<?php
include("koneksi.php");
if(!isset($_GET['id_peminjam'])){
    header('location:koneksi.php?');
}

$id_peminjam = $_GET['id_peminjam'];
$sql = "SELECT * FROM tb_peminjam INNER JOIN tb_mobil ON tb_peminjam.id_mobil
     = tb_mobil.id_mobil WHERE tb_peminjam.id_peminjam='$id_peminjam'";
$query = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) <1){
    die ("data tidak ditemukan");
}
?>
<html>
    <head>
    <link rel="icon" type="icon/x-icon" href="wahyuw.jpg">
    </head>
    <body>
    <link rel="stylesheet" href="gaya.css">
        <center>
            <h1>FORM EDIT</h1>
            <table border="1">
                <form action="proses_edit.php" METHOD="POST">
                    <input type="hidden" name="id_peminjam" value="<?php echo $row['id_peminjam'] ?>" />
                    <tr>
                        <td><label for="nama_peminjam">Nama Peminjam</label></td>
                        <td><input type="text" name="nama_peminjam" value="<?php echo $row['nama_peminjam']?>"/>
                    </tr><tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"/>
                    </tr><tr>
                        <td><label for="umur">Umur</label></td>
                        <td><input type="text" name="umur" value="<?php echo $row['umur']?>"/>
                    </tr><tr>
                        <td><label for="keperluan">Keperluan</label></td>
                        <td><input type="text" name="keperluan" value="<?php echo $row['keperluan']?>"/>
                    </tr><tr>
                        <td><label for="jaminan">Jaminan</label></td>
                        <td><input type="text" name="jaminan" value="<?php echo $row['jaminan']?>"/>
                    </tr><tr>
                        <td><label for="plat_nomor">Plat Nomor</label></td>
                        <td><input type="text" name="plat_nomor" value="<?php echo $row['plat_nomor']?>"/>
                    </tr><tr>
                        <td><label for="merek">Merek</label></td>
                        <td><input type="text" name="merek" value="<?php echo $row['merek']?>"/>
                    </tr><tr>
                        <td><label for="jenis_mobil">Jenis Mobil</label></td>
                        <td><input type="text" name="jenis_mobil" value="<?php echo $row['jenis_mobil']?>"/>
                    </tr><tr>
                        <td><label for="tahun_mobil">Tahun Mobil</label></td>
                        <td><input type="text" name="tahun_mobil" value="<?php echo $row['tahun_mobil']?>"/>
                    </tr><tr>
                        <td><label for="tanggal_pinjam">Tanggal Pinjam</label></td>
                        <td><input type="date" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam']?>"/>
                    </tr><tr>
                        <td><label for="tanggal_kembali">Tanggal Kembali</label></td>
                        <td><input type="date" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali']?>"/>
                    </tr>

<p>
<td><a href="data.php"><input type="button" name="kembali" value="KEMBALI"></a></td>
<td><input type="submit" name="edit" value="EDIT"></a></td>
</table>
</form>
    </body>
</html>