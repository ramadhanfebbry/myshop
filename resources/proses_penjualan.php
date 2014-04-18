<?php
//panggil file config.php untuk menghubung ke server
include('../connection.php');
 	session_start();

//tangkap data dari form
$kode_barang = $_POST['kode_barang'];
$jumlah_pembelian = $_POST['jumlah_pembelian'];
 .
	$sql="SELECT * FROM barang WHERE kode='$kode_barang'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	if($count==1){

	if ($row["jumlah"] >= $jumlah_pembelian){	
		$total=$row["harga"]* $jumlah_pembelian;
		$query = mysql_query("insert into penjualan values('', '$kode_barang', '$jumlah_pembelian', null,'$total')") or die(mysql_error());
 		
		if ($query) {
			$new_jumlah = $row["jumlah"] - $jumlah_pembelian;
			mysql_query("update barang set jumlah='$new_jumlah' where kode='$kode_barang'") or die(mysql_error());
		  $_SESSION["flash"] = "Proses Berhasil!";
			$_SESSION["flash_type"] = "alert-success";
		  header('location:../penjualan.php');
		}
	}else{
	 $_SESSION["flash"] = "Masukan Jumlah yang paling kecil!";
			$_SESSION["flash_type"] = "alert-danger";
		  header('location:../penjualan.php');

	}
}else
{
	$_SESSION["flash"] = "Barang Tidak Ditemukan!";
	$_SESSION["flash_type"] = "alert-danger";
  header('location:../penjualan.php');
}
//simpan data ke database

?>