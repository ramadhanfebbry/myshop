
<div class="container marketing">
<h1>List Barang</h1>
      <div class="row">

  <?php
		require_once "connection.php";
		$query = mysql_query("select * from barang");
		while ($data = mysql_fetch_array($query)) {
	?>
        <div class="span4">
          <img class="img-polaroid" data-src="holder.js/140x140" alt="140x140" src="<?php echo $data['img_tmp']?>" style="width: 140px; height: 140px;">
          <?php 
          echo "<h2>".$data['nama']."</h2>";
          echo "<span>".$data['harga']."</span>";
          echo "<p><a class='btn' href='tampil_barang.php?kode=".$data['kode']."'>View details »</a></p>";
          ?>
        </div><!-- /.span4 -->
  <?php
		}
	?>
      </div><!-- /.row -->

<br />
<a href="tambah_barang.php" class="btn btn-primary btn-large">
<i class="icon-plus icon-white"></i>
Tambah Barang</a>
    </div>

<!-- 
<h1>List Barang</h1>
<table border="1px" style="width: 100%" class="table table-striped table-bordered">
	<tr class="success">
		<th> # Kode </th>
		<th> Nama Barang</th>
		<th> Harga</th>
		<th> Stok</th>	
		<th> Action</th>
	</tr>
	<?php
	require_once "connection.php";
	$query = mysql_query("select * from barang");

	$no = 1;
	while ($data = mysql_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td>
				<a href="edit.php?barang_id=<?php echo $data['kode']; ?>" class="btn btn-primary btn-mini">Edit</a> 
				<a href="delete.php?barang_id=<?php echo $data['kode']; ?>" class="btn btn-danger btn-mini">Hapus</a>
			</td>
		</tr>
		<?php
		$no++;
	}
	?>
</table> -->
