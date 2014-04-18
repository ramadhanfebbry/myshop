<?php
		require_once "connection.php";
		$kode=$_GET["kode"];
		$query = mysql_query("select * from barang where kode='$kode'");
		while ($data = mysql_fetch_array($query)) {
	?>
 <div class="container marketing"><br>
 <?php
    echo "<a href='page.php?page_name=edit_barang&kode=".$kode."' class='pull-right btn btn-primary btn-small' style='margin-left: 5px;'>";
    echo "<i class='icon-plus icon-white'></i>Edit</a>";
    echo "<a href='page.php?page_name=listbarang' class='pull-right btn btn-info btn-small'>";
    echo "<i class='icon-list icon-white'></i>Back</a> | ";
  ?>

      <div class="row">

        <div class="span7">
          <img class="img-polaroid" data-src="holder.js/1040x684" alt="1040x684" src="<?php echo $data['img_tmp']?>" style="width: 90%; height: 90%;">
          <br />
          <br />
          <br />
          <?php 
          echo "<table class='table table-bordered table-stripped'><tr><td>Kode </td><td> : </td>";
          echo "<td><b>#".$data['kode']."</b></td></tr>";

          echo "<tr><td>Nama Barang</td><td> : </td><td><a href='page.php?page_name=tampil_barang&kode=".$data['kode']."'>".$data["nama"]."</a></td></tr>";
                    echo "<tr><td>Tanggal Masuk</td><td> : </td><td>".$data['tanggal_masuk']."</td></tr>";

          echo "<tr><td>Keterangan</td><td>:</td><td>".$data['keterangan']."</td></tr>";

          echo "<tr><td>Stok </td><td> : </td><td>".$data["jumlah"]."</td></tr>";
          echo "</table>";
          ?>
        </div><!-- /.span4 -->
  
      </div><!-- /.row -->

<br />
<?php
		}
	?>

