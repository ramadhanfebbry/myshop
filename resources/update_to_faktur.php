<?php
//panggil file config.php untuk menghubung ke server
include('../connection.php');
 session_start();

//simpan data ke database
$kode_sj = $_GET["kode"];
$result=mysql_query("select * from surat_jalan");
$count=mysql_num_rows($result) + 1;
$kode = "FJ-".$count;

$result=mysql_query("select * from surat_jalan where kode_surat_jalan='$kode_sj'");

$data = mysql_fetch_array($result);
$kode_penjualan = $data["kode_penjualan"];
$nama_pembeli = $data["nama_pembeli"];
$alamat = $data["alamat"];
$telp = $data["telp"];
$result=mysql_query("select * from faktur");
$count=mysql_num_rows($result) + 1;
$kode = "FJ-".$count;
$sql = "insert into faktur values('$kode', '$kode_penjualan', '$nama_pembeli', '$alamat', '$telp', null, '$kode_sj')";
$query = mysql_query($sql) or die(mysql_error());   

 
if ($query) {
    $_SESSION["flash"] = "Update Barang Berhasil!";
    $_SESSION["flash_type"] = "alert-success";
    header("location: ../page.php?page_name=faktur&kode=$kode_sj");
}else{
  $_SESSION["flash"] = "Tambah Barang Gagal!";
  $_SESSION["flash_type"] = "alert-danger";
  header('location: ../page.php?page_name=surat_jalan&kode=$kode_sj');
}
?>