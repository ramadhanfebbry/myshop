<?php
//panggil file config.php untuk menghubung ke server
include('../connection.php');
 session_start();
//tangkap data dari form
$kode = $_POST["kode"];
$jumlah1 = $_POST["jumlah"];
$sql="SELECT * FROM barang WHERE kode='$kode'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$jumlah = $jumlah1 + $row["jumlah"]; 
$tanggal_masuk = $row["tanggal_masuk"];
//simpan data ke database
$query = mysql_query("update barang set jumlah=$jumlah WHERE kode='$kode'") or die(mysql_error());
$query2 = mysql_query("insert into log_stok values('$kode', $jumlah1, DATE('$tanggal_masuk'))") or die(mysql_error());

if ($query) {
    $_SESSION["flash"] = "Tambah Stok Berhasil!";
    $_SESSION["flash_type"] = "alert-success";
    
}else{
  $_SESSION["flash"] = "Tambah Stok Gagal!";
  $_SESSION["flash_type"] = "alert-danger";
}
  header('location: ../page.php?page_name=listbarang');

?>