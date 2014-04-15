<?php
include('connection.php');
 
//tangkap data dari form
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
 
//update data di database sesuai user_id
$query = mysql_query("update barang set nama='$nama_barang', harga='$harga' where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}
?>