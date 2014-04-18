<h1> Laporan Stok</h1>
<br>

<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Laporan Harian</a></li>
    <li><a href="#tab2" data-toggle="tab">Laporan Mingguan</a></li>
    <li><a href="#tab3" data-toggle="tab">Laporan Bulanan</a></li>
    
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <p>
      <a href="#" class="harianPrint btn"><i class="icon-print"></i></a>
    <table class="table table-bordered table-stripped" id="harianPrintdiv">
      <!-- <Awal Title Table> -->
      <tr>
        <th># Kode</th>
        <th>Nama Barang </th>  
        <th>Jumlah</th>
        <th>Tanggal</th>
      </tr>
      <!-- <Akhir Title Table> -->
      <!-- <Awal Isi looping table> -->
     <?php
  include "connection.php";
  $query_harian = mysql_query("select * from log_stok WHERE DATE( tanggal ) = CURDATE( )");

  while ($data_harian = mysql_fetch_array($query_harian)) {
    $kode_barang = $data_harian["kode_barang"];
    $sqlBarang="SELECT * FROM barang WHERE kode='$kode_barang'";
    $resultBarang=mysql_query($sqlBarang);
    $rowBarang=mysql_fetch_array($resultBarang);
    
    ?>
    <tr>
      <td><?php echo $data_harian["kode_barang"]; ?></td>
      <td><a href='tampil_barang.php?kode=".$data['kode_barang']."'><?php echo $rowBarang['nama'] ?></td>
      <td><?php echo $data_harian['jumlah']; ?></td>
      <td><?php echo $data_harian['tanggal']; ?></td>
      
      
    </tr>
    <?php
  }
  ?>
      <!-- <Awal Isi looping table> -->
      </table>
      </p>
    </div>
    <div class="tab-pane" id="tab2">
      <p>
      <a href="#" class="mingguanPrint btn"><i class="icon-print"></i></a>
      <table class="table table-bordered table-stripped" id="mingguanPrintDiv">
      <!-- <Awal Title Table> -->
      <tr>
        <th># Kode</th>
        <th>Nama Barang </th>  
        <th>Jumlah</th>
        <th>Tanggal</th>
      </tr>
      <!-- <Akhir Title Table> -->
      <!-- <Awal Isi looping table> -->
     <?php
  include "connection.php";
  $query_mingguan = mysql_query("select * from log_stok WHERE tanggal > DATE_SUB(NOW(), INTERVAL 1 WEEK)");

  while ($data_mingguan = mysql_fetch_array($query_mingguan)) {
    $kode_barang = $data_mingguan["kode_barang"];
    $sqlBarang="SELECT * FROM barang WHERE kode='$kode_barang'";
    $resultBarang=mysql_query($sqlBarang);
    $rowBarang=mysql_fetch_array($resultBarang)
    ?>
    <tr>
      <td><?php echo $data_mingguan["kode_barang"]; ?></td>
      <td><a href='tampil_barang.php?kode=".$data['kode_barang']."'><?php echo $rowBarang['nama'] ?></td>
      <td><?php echo $data_mingguan['jumlah']; ?></td>
      <td><?php echo $data_mingguan['tanggal']; ?></td>
      
      
    </tr>
    <?php
  }
  ?>
      <!-- <Awal Isi looping table> -->
      </table>
      </p>
    </div>
    <div class="tab-pane" id="tab3">
     <p>
     <a href="#" class="bulananPrint btn"><i class="icon-print"></i></a>
      <table class="table table-bordered table-stripped" id="bulananPrintDiv">
      <!-- <Awal Title Table> -->
      <tr>
        <th># Kode</th>
        <th>Nama Barang </th>  
        <th>Jumlah</th>
        <th>Tanggal</th>
      </tr>
      <!-- <Akhir Title Table> -->
      <!-- <Awal Isi looping table> -->
     <?php
  include "connection.php";
  $query_bulanan = mysql_query("select * from log_stok WHERE tanggal > DATE_SUB(NOW(), INTERVAL 1 MONTH)");

  while ($data_bulanan = mysql_fetch_array($query_bulanan)) {
    $kode_barang = $data_bulanan["kode_barang"];
    $sqlBarang="SELECT * FROM barang WHERE kode='$kode_barang'";
    $resultBarang=mysql_query($sqlBarang);
    $rowBarang=mysql_fetch_array($resultBarang)
    ?>
     <tr>
      <td><?php echo $data_bulanan["kode_barang"]; ?></td>
      <td><a href='tampil_barang.php?kode=".$data['kode_barang']."'><?php echo $rowBarang['nama'] ?></td>
      <td><?php echo $data_bulanan['jumlah']; ?></td>
      <td><?php echo $data_bulanan['tanggal']; ?></td>
      
      
    </tr>
    <?php
  }
  ?>
      <!-- <Awal Isi looping table> -->
      </table>
      </p>
    </div>
    
  </div>
</div>

