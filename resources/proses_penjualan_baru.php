<?php
//panggil file config.php untuk menghubung ke server
include('../connection.php');
 	session_start();
 	$kode = $_POST["kode"];
 	$jumlah = $_POST["jumlah"];
 	$nama_pembeli = $_POST["nama_pembeli"];
 	$alamat = $_POST["alamat"];
 	$telp = $_POST["telp"];
 	$sqlKodePenjualan = "select kode_penjualan from penjualan group by kode_penjualan order by kode_penjualan desc LIMIT 1";
 	$resultsqlKodePenjualan=mysql_query($sqlKodePenjualan);
	$countsqlKodePenjualan=mysql_num_rows($resultsqlKodePenjualan);
 	$random_kode = "PB-".$countsqlKodePenjualan;
 	for($i=0;$i<sizeof($kode);$i++){
 			$kode_barang = $kode[$i];
 			$jumlah_pembelian = $jumlah[$i];
 			$sql="SELECT * FROM barang WHERE kode='$kode_barang'";
			$result=mysql_query($sql);
			$row=mysql_fetch_array($result);
			$count=mysql_num_rows($result);
			if($count==1 && ($row["jumlah"] >= $jumlah_pembelian)){
				$total=$row["harga_jual"] * $jumlah_pembelian;				
				$sql = "insert into penjualan values('$random_kode', '$kode_barang', '$jumlah_pembelian', null,'$total')";
	 			$query = mysql_query($sql) or die(mysql_error());		

	 			if ($query) {
					$new_jumlah = $row["jumlah"] - $jumlah_pembelian;
					mysql_query("update barang set jumlah='$new_jumlah' where kode='$kode_barang'") or die(mysql_error());
				  $_SESSION["flash"] = "Proses Berhasil!";
					$_SESSION["flash_type"] = "alert-success";
					if($_POST["pilihan_cetak"] == "faktur"){
						$result=mysql_query("select * from faktur");
						$count=mysql_num_rows($result) + 1;
						$kode = "FJ-".$count;
						$sql = "insert into surat_jalan values('$kode', '$random_kode', '$nama_pembeli', '$alamat', '$telp', null, '')";
	 					$query = mysql_query($sql) or die(mysql_error());		

				  	header('location:../faktur.php?kode='.$kode);

					}else{
						$result=mysql_query("select * from surat_jalan");
						$count=mysql_num_rows($result) + 1;
						$kode = "SJ-".$count;
						$sql = "insert into surat_jalan values('$kode', '$random_kode', '$nama_pembeli', '$alamat', '$telp', null)";
	 					$query = mysql_query($sql) or die(mysql_error());		

				  	header('location:../surat_jalan.php?kode='.$kode);

					}
				}		
			}
 
 	}



?>