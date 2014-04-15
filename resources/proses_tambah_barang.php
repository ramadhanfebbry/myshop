<?php
//panggil file config.php untuk menghubung ke server
include('../connection.php');
 session_start();
//tangkap data dari form
$nama_barang = $_POST['nama_barang'];
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
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  }
else
  {
  echo "Invalid file";
  }
$harga = $_POST['harga'];
$harga_jual = $_POST['harga_jual'];
 $jumlah = $_POST['jumlah'];
 $tanggal_masuk = $_POST['tanggal_masuk'];
$imgData = file_get_contents($_FILES['file']['tmp_name']);
$base64   = base64_encode($imgData); 
$keterangan = $_POST['keterangan'];
$img = 'data:' . $_FILES["file"]["type"] . ';base64,' . $base64;
//simpan data ke database
$query = mysql_query("insert into barang values('', '$nama_barang', '$harga', '$harga_jual', '$jumlah','$tanggal_masuk', '$keterangan', '$img', '$img_Data')") or die(mysql_error());
 
if ($query) {
		$_SESSION["flash"] = "TAMBAH BARANG BERHASIL!";
		$_SESSION["flash_type"] = "alert-success";
    header('location:../list_barang.php');
}else{
	echo "Tambah Barang gagal";
}
?>