<a href="javascript:void(0)" class="suratJalanPrint btn"><i class="icon-print"></i></a>
<br />
<div class="clearfix"></div>
<div class="detail_surat_jalan">
<?php
		require_once "connection.php";
		$kode=$_GET["kode"];
		$query = mysql_query("select * from surat_jalan where kode_surat_jalan='$kode'");
		while ($data = mysql_fetch_array($query)) {
	?>
	<div style="width: 95%;float:left">
 <h3><?php echo PROJECT_NAME ?></h3>
 <span>JL. Cijerah</span>
 </div>
 <div style="width: 5%;float:left">
 <b><?php echo $data["kode_surat_jalan"] ?></b>
 </div>
 <div class="clearfix"></div>
 <hr/>
 <div class="bs-docs-example customer">
 <table>
	<tr align="left">
		<th>Nama Customer</th>
		<td>:</td>
		<td><?php echo $data["nama_pembeli"]; ?></td>
	</tr>
	<tr align="left">
		<th>Alamat</th>
		<td>:</td>
		<td><?php echo $data["alamat"]; ?></td>
	</tr>
	<tr align="left">
		<th>Telepon</th>
		<td>:</td>
		<td><?php echo $data["telp"]; ?></td>
	</tr>
 </table>
</div>
<div class="bs-docs-example pembelian">
 <table class="table table-bordered table-stripped">
 <tr>
 <thead>
	 <th>Kode Barang</th>
	 <th>Nama</th>
	 <th>Harga</th>
	 <th>Jumlah</th>
	 <th>Total</th>
	</thead>
 </tr>
 <?php
 $kode = $data["kode_penjualan"];
 $query = mysql_query("select * from penjualan where kode_penjualan='$kode'");
 $total_pembelian = 0;
	while ($data = mysql_fetch_array($query)) {
		$kode_barang = $data["kode_barang"];
		$query_barang = mysql_query("select * from barang where kode='$kode_barang'");
		
		$data_barang = mysql_fetch_array($query_barang);
			echo "<tbody><tr><td>".$data_barang["kode"]."</td>";
			echo "<td>".$data_barang["nama"]."</td>";
			echo "<td>".$data_barang["harga_jual"]."</td>";
			echo "<td>".$data["jumlah_pembelian"]."</td>";
			echo "<td>".$data["total"]."</td></tr></tbody>";
			$total_pembelian = $total_pembelian + $data["total"];
	}
	echo "<tfoot><tr><th>Total Pembelian</th>";
	echo "<td colspan='4' style='text-align:right'>Rp. ".$total_pembelian."</td></tr></tfoot>";
 ?>
 </table>
 <?php
 $kode=$_GET["kode"];
 $query = mysql_query("select * from faktur where kode_surat_jalan='$kode'");
 $data = mysql_fetch_array($query);
 $count = mysql_num_rows($query);
 
 if($count == 0){
 	echo "<a href='resources/update_to_faktur.php?kode=".$kode."' class='btn btn-primary'>Pindah Ke Faktur</a>";
 }
 ?>
 </div>
<br />
<?php
		}
	?>


</div>