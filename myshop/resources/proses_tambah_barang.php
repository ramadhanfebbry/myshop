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
 $jumlah = $_POST['jumlah'];
 $tanggal_masuk = $_POST['tanggal_masuk'];
//simpan data ke database
$imgData = file_get_contents($_FILES['file']['tmp_name']);
$base64   = base64_encode($imgData); 
$img = 'data:' . $_FILES["file"]["type"] . ';base64,' . $base64;
$query = mysql_query("insert into barang values('', '$nama_barang', '$harga', '$jumlah','$tanggal_masuk', '$keterangan', '$img')") or die(mysql_error());
 
if ($query) {
		$_SESSION["flash"] = "TAMBAH BARANG BERHASIL!";
		$_SESSION["flash_type"] = "alert-success";
    header('location:../list_barang.php');
}else{
	echo "Tambah Barang gagal";
}
?>