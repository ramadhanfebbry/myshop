<?php
//panggil file config.php untuk menghubung ke server
include('../connection.php');
 session_start();
//tangkap data dari form

$allowedExts = array("gif", "jpeg", "jpg", "png");
print_r($_FILES);
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))

&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
     $_SESSION["flash"] = "Upload Foto Gagal!";
      $_SESSION["flash_type"] = "alert-danger";
      header('location:../page.php?page_name=tambah_barang');

    }
  }
else
  {
  $_SESSION["flash"] = "File tidak Valid!";
  $_SESSION["flash_type"] = "alert-danger";
  header('location:../page.php?page_name=tambah_barang');
  }

$kode = $_POST['kode'];
$nama_barang = $_POST['nama_barang'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$jumlah = $_POST['jumlah'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$imgData = file_get_contents($_FILES['file']['tmp_name']);
$base64   = base64_encode($imgData); 
$keterangan = $_POST['keterangan'];
$id_supplier = $_POST['id_supplier'];
$img = 'data:' . $_FILES["file"]["type"] . ';base64,' . $base64;
$jenis_barang = $_POST['jenis_barang'];
$query_exist = mysql_query("select * from barang where kode='$kode'");
$count=mysql_num_rows($query_exist);
if($count>=1){
  $_SESSION["flash"] = "Barang Sudah Ada, silahkan Update atau Koreksi Kode Barang!";
  $_SESSION["flash_type"] = "alert-success";
  header('location:../list_barang.php');  
}
//simpan data ke database
$query = mysql_query("insert into barang values('$kode', '$nama_barang', $harga_beli, $harga_jual, $jumlah, DATE('$tanggal_masuk'), '$keterangan', '$img', '$jenis_barang', '$id_supplier')") or die(mysql_error());
$query2 = mysql_query("insert into log_stok values('$kode', $jumlah, DATE('$tanggal_masuk'))") or die(mysql_error());

 
if ($query) {
		$_SESSION["flash"] = "TAMBAH BARANG BERHASIL!";
		$_SESSION["flash_type"] = "alert-success";
    header('location:../page.php?page_name=listbarang');
}else{
	$_SESSION["flash"] = "Tambah Barang Gagal!";
  $_SESSION["flash_type"] = "alert-danger";
  header('location:../page.php?page_name=tambah_barang');
}
?>