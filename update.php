<?php
//panggil file config.php untuk menghubung ke server
include('connection.php');
 session_start();
//tangkap data dari form

$allowedExts = array("gif", "jpeg", "jpg", "png");

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
      header('location: page.php?page_name=edit_barang');

    }
    $imgData = file_get_contents($_FILES['file']['tmp_name']);
    $base64   = base64_encode($imgData); 
    $img = 'data:' . $_FILES["file"]["type"] . ';base64,' . $base64;

  }
else
  {
  // $_SESSION["flash"] = "File tidak Valid!";
  // $_SESSION["flash_type"] = "alert-danger";
  // header('location: page.php?page_name=edit_barang');
    $img = $_POST["img_file"];
  }

$kode = $_POST['kode'];
$nama_barang = $_POST['nama_barang'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$jumlah = $_POST['jumlah'];
$jenis_barang = $_POST['jenis_barang'];
$tanggal_masuk = $_POST['tanggal_masuk'];

echo $tanggal_masuk;
$keterangan = $_POST['keterangan'];
$id_supplier = $_POST['id_supplier'];

//simpan data ke database
$query = mysql_query("update barang set tanggal_masuk=DATE($tanggal_masuk), jenis_barang='$jenis_barang', kode='$kode', nama='$nama_barang', harga_beli=$harga_beli, harga_jual=$harga_jual, jumlah=$jumlah, tanggal_masuk='$tanggal_masuk', keterangan='$keterangan', img_tmp='$img', jenis_barang='$jenis_barang', id_supplier='$id_supplier' WHERE kode='$kode'") or die(mysql_error());

if ($query) {
    $_SESSION["flash"] = "Update Barang Berhasil!";
    $_SESSION["flash_type"] = "alert-success";
    header("location: page.php?page_name=tampil_barang&kode=$kode");
}else{
  $_SESSION["flash"] = "Tambah Barang Gagal!";
  $_SESSION["flash_type"] = "alert-danger";
  header('location: page.php?page_name=edit_barang');
}
?>