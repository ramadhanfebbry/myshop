<?php
include('connection.php');
 session_start();
$id = $_GET['kode'];
 
$query = mysql_query("delete from barang where kode='$id'") or die(mysql_error());
 
if ($query) {
	$_SESSION["flash"] = "DATA BERHASIL DIHAPUS!";
		$_SESSION["flash_type"] = "alert-success";
}
    header('location:page.php?page_name=listbarang');

?>