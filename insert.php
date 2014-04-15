<?php
//panggil file config.php untuk menghubung ke server
include('connection.php');
 
//tangkap data dari form
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
 
//simpan data ke database
$query = mysql_query("insert into barang values('', '$nama_barang', '$harga')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}
?>