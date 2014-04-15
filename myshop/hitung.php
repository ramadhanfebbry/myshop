<?php
include('connection.php');
 
//tangkap data dari form
$id = $_POST['id_barang']; 
$jumlah = $_POST['jumlah']; 
//update data di database sesuai user_id
$query = mysql_query("SELECT * FROM barang where id='$id'") or die(mysql_error());
$row=mysql_fetch_array($query);
 $total = $row["harga"] * $jumlah; 
 echo "<center>";
 echo "Nama Barang : $total<br />";
 echo "Jumlah : $jumlah<br />";
 echo "Total : $total<br />";
 echo "<a href='index.php'>Kembali Ke Halaman Utama </a>";

 echo "</center>";

?>