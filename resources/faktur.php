<h1>Faktur</h1>
<?php
if(isset($_GET["kode"])){
require "resources/detail_faktur.php";
}else{

?>

<div class="pull-right" style="width: 100%;">
<form class="form-search" style="float: right;" method="GET" action="page.php">
  <input type="text" class="input-medium search-query" name="q" value="<?php echo isset($_GET["q"]) ? $_GET["q"] : "" ?>">
  <input type="hidden" name="page_name" value="faktur" >
  <button type="submit" class="btn">Search</button>
</form>
</div>
<table class="table table-bordered table-stripped">
<tr>
	<th># No</th>
	<th>Kode Faktur</th>
	<th>Kode Penjualan</th>
	<th>Pembeli</th>
	<th>Tanggal</th>
	</tr>

  <?php
		require_once "connection.php";
		if(isset($_GET["q"])){
      $q = $_GET["q"];
      $sqlScript = "SELECT * FROM faktur where kode_surat_jalan LIKE '%$q%' or kode_penjualan LIKE '%$q%'";
    }else{
      $sqlScript = "SELECT * FROM faktur";
    }

    if(isset($_GET["page_no"])){
    	$page_no = $_GET["page_no"];
    	$sqlScript = $sqlScript . " LIMIT 30 OFFSET ".$page_no;
    }
    $query = mysql_query($sqlScript);
    $count=mysql_num_rows($query);
    $no = 1;
    if(isset($_GET["page_no"])){
    	$no = $_GET["page_no"] * $count;
		}
		while ($data = mysql_fetch_array($query)) {
			
	?>
		<tr onclick="document.location='page.php?page_name=faktur&kode=<?php echo $data["kode_surat_jalan"]; ?>'">
			<td><?php echo $no; ?></td>
			<td><?php echo $data["kode_surat_jalan"]; ?></td>
			<td><?php echo $data["kode_penjualan"]; ?></td>
			<td><?php echo $data["nama_pembeli"]; ?></td>
			<td><?php echo $data["tanggal"]; ?></td>
		</tr>
	<?php 
		$no++;
	} 
}
	
	?>
</table>
