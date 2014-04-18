
<div class="container marketing">
<h2>List Barang</h2>
<div class="pull-right" style="width: 100%;">
<form class="form-search" style="float: right;" method="GET" action="page.php">
  <input type="text" class="input-medium search-query" name="q" value="<?php echo isset($_GET["q"]) ? $_GET["q"] : "" ?>">
  <input type="hidden" name="page_name" value="listbarang" >
  <button type="submit" class="btn">Search</button>
</form>
<a href="page.php?page_name=tambah_barang" class="btn btn-primary btn-small" style="float: left;">
<i class="icon-plus icon-white"></i>
Tambah</a>
</div>
<br />

    </div>
<br>

    <div class="clearfix"></div>
      <div class="row">

  <?php
		require_once "connection.php";
		if(isset($_GET["q"])){
      $q = $_GET["q"];
      $sqlScript = "SELECT * FROM barang where nama LIKE '%$q%' or kode LIKE '%$q%'";
    }else{
      $sqlScript = "SELECT * FROM barang";
    }
    $query = mysql_query($sqlScript);
		while ($data = mysql_fetch_array($query)) {
	?>
        <div class="span3" style="border: 1px solid #cdcdcd;margin:0px;padding:5px">
          <img class="img-polaroid" data-src="holder.js/140x140" alt="140x140" src="<?php echo $data['img_tmp']?>" style="width: 95%; height: 150px;">
          <?php 
          echo "<span><b>#".$data['kode']."</b></span>";

          echo "<h3><a href='page.php?page_name=tampil_barang&kode=".$data['kode']."'>".$data["nama"]."</a></h3>";
          echo "<p><a href='page.php?page_name=edit_barang&kode=".$data['kode']."'>Edit</a>";
          echo " | <a href='page.php?page_name=tampil_barang&kode=".$data['kode']."'>Tampil</a>";
          echo " | <a href='javascript:void(0)' class='tambahStock' data-id='".$data['kode']."'>Tambah Stok</a>";
          echo " | <a href='delete.php?kode=".$data['kode']."'>Hapus</a></p>";
          ?>
        </div><!-- /.span4 -->

  <?php
		}
	?>
      </div><!-- /.row -->

