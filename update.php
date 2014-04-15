<?php
include('connection.php');
 
//tangkap data dari form
$id = $_POST['kode'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga = $_POST['harga'];
$harga_jual = $_POST['harga_jual'];
$keterangan = $_POST['keterangan'];
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
//simpan data ke database
$imgData = file_get_contents($_FILES['file']['tmp_name']);
$base64   = base64_encode($imgData); 
$img = 'data:' . $_FILES["file"]["type"] . ';base64,' . $base64;
$tanggal_masuk = $_POST['tanggal_masuk'];
 
//update data di database sesuai user_id
$query = mysql_query("update barang set jenis_barang='$jenis_barang', harga_jual='$harga_jual', keterangan='$keterangan', nama='$nama_barang', harga='$harga', img_tmp='$img', tanggal_masuk='$tanggal_masuk' where kode='$id'") or die(mysql_error());
 
if ($query) {
    
		$_SESSION["flash"] = "EDIT BARANG BERHASIL!";
		$_SESSION["flash_type"] = "alert-success";
    header('location: page.php?page_name=enchant_dict_add_to_personal(dict, word)barang');
}else{
	echo "Edit Barang gagal";
}

?>