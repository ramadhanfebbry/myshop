<?php
		require_once "connection.php";
		$kode=$_GET["kode"];
		$query = mysql_query("select * from barang where kode='$kode'");
		while ($data = mysql_fetch_array($query)) {
	?>
 <div class="container marketing"><br>
 <?php
 echo "<a href='page.php?page_name=edit_barang&kode=".$kode."' class='pull-right btn btn-primary btn-smal'>";
echo "<i class='icon-plus icon-white'></i>Edit Barang</a></div>";
?>
<h1><?php echo $data["nama"] ?></h1>
      <div class="row">

        <div class="span4">
          <img class="img-polaroid" data-src="holder.js/1040x684" alt="1040x684" src="<?php echo $data['img_tmp']?>" style="width: 140px; height: 140px;">
          <br />
          <?php 
          echo "<span>".$data['harga']."</span>";
          echo "<h2>".$data['keterangan']."</h2>";

          echo "<p>Stok : ".$data["jumlah"]."</p>";
          ?>
        </div><!-- /.span4 -->
  
      </div><!-- /.row -->

<br />
<?php
		}
	?>
