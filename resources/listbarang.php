
<div class="container marketing">
<h2>List Barang</h2>
<a href="page.php?page_name=tambah_barang" class="pull-right btn btn-primary btn-large">
<i class="icon-plus icon-white"></i>
Tambah Barang</a>
<br />

    </div>
<br>

    <div class="clearfix"></div>
      <div class="row">

  <?php
		require_once "connection.php";
		$query = mysql_query("select * from barang");
		while ($data = mysql_fetch_array($query)) {
	?>
        <div class="span3">
          <img class="img-polaroid" data-src="holder.js/140x140" alt="140x140" src="<?php echo $data['img_tmp']?>" style="width: 140px; height: 140px;">
          <?php 
          echo "<h3><a  href='page.php?page_name=tampil_barang&kode=".$data['kode']."'>".$data["nama"]."</a></h3>";
          echo "<span>".$data['harga']."</span>";
          echo "<p><a href='page.php?page_name=edit_barang&kode=".$data['kode']."'>Edit</a>";
          echo " | <a href='delete.php?kode=".$data['kode']."'>Hapus</a></p>";
          ?>
        </div><!-- /.span4 -->

  <?php
		}
	?>
      </div><!-- /.row -->

