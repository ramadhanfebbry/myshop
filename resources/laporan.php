<br>

<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Laporan Harian</a></li>
    <li><a href="#tab2" data-toggle="tab">Laporan Mingguan</a></li>
    <li><a href="#tab3" data-toggle="tab">Laporan Bulanan</a></li>
    <li><a href="#tab4" data-toggle="tab">Laporan Tahunan</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <p>
      <a href="#" class="harianPrint btn"><i class="icon-print"></i></a>
      <table class="table table-bordered table-stripped" id="harianPrintdiv">
      <!-- <Awal Title Table> -->
      <tr>
        <th># No Faktur</th>
        <th>Nama Barang </th>  
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Total</th>
      </tr>
      <!-- <Akhir Title Table> -->
      <!-- <Awal Isi looping table> -->
     <?php
  include "connection.php";
  $query_harian = mysql_query("select * from penjualan WHERE DATE( tanggal_pembelian ) = CURDATE( )");

  while ($data_harian = mysql_fetch_array($query_harian)) {
    $kode_barang = $data_harian["kode_barang"];
    $sqlBarang="SELECT * FROM barang WHERE kode='$kode_barang'";
    $resultBarang=mysql_query($sqlBarang);
    $rowBarang=mysql_fetch_array($resultBarang);
    ?>
    <tr>
      <td><?php echo $data_harian["kode_penjualan"]; ?></td>
      <td><a href='tampil_barang.php?kode=".$data['kode']."'><?php echo $rowBarang['nama'] ?></td>
      <td><?php echo $data_harian['jumlah_pembelian']; ?></td>
      <td><?php echo $data_harian['tanggal_pembelian']; ?></td>
      <td><?php echo $data_harian['total']; ?></td>
      
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
        <th># No Faktur</th>
        <th>Nama Barang </th>  
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Total</th>
      </tr>
      <!-- <Akhir Title Table> -->
      <!-- <Awal Isi looping table> -->
     <?php
  include "connection.php";
  $query_mingguan = mysql_query("select * from penjualan WHERE tanggal_pembelian > DATE_SUB(NOW(), INTERVAL 1 WEEK)");

  while ($data_mingguan = mysql_fetch_array($query_mingguan)) {
    ?>
    <tr>
      <td><?php echo $data_mingguan["kode_penjualan"]; ?></td>
      <td><a href='tampil_barang.php?kode=".$data['kode']."'><?php echo $data_mingguan['kode_barang'] ?></td>
      <td><?php echo $data_mingguan['jumlah_pembelian']; ?></td>
      <td><?php echo $data_mingguan['tanggal_pembelian']; ?></td>
      <td><?php echo $data_mingguan['total']; ?></td>
      
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
        <th># No Faktur</th>
        <th>Nama Barang </th>  
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Total</th>
      </tr>
      <!-- <Akhir Title Table> -->
      <!-- <Awal Isi looping table> -->
     <?php
  include "connection.php";
  $query_bulanan = mysql_query("select * from penjualan WHERE tanggal_pembelian > DATE_SUB(NOW(), INTERVAL 1 MONTH)");

  while ($data_bulanan = mysql_fetch_array($query_bulanan)) {
    ?>
    <tr>
      <td><?php echo $data_bulanan["kode_penjualan"]; ?></td>
      <td><a href='tampil_barang.php?kode=".$data['kode']."'><?php echo $data_bulanan['kode_barang'] ?></td>
      <td><?php echo $data_bulanan['jumlah_pembelian']; ?></td>
      <td><?php echo $data_bulanan['tanggal_pembelian']; ?></td>
      <td><?php echo $data_bulanan['total']; ?></td>
      
    </tr>
    <?php
  }
  ?>
      <!-- <Awal Isi looping table> -->
      </table>
      </p>
    </div>
    <div class="tab-pane" id="tab4">
      <p>
      <a href="#" class="tahunanPrint btn"><i class="icon-print"></i></a>
      <table class="table table-bordered table-stripped" id="tahunanPrintDiv">
      <!-- <Awal Title Table> -->
      <tr>
        <th># No Faktur</th>
        <th>Nama Barang </th>  
        <th>Jumlah</th>
        <th>Tanggal</th>
        <th>Total</th>
      </tr>
      <!-- <Akhir Title Table> -->
      <!-- <Awal Isi looping table> -->
     <?php
  include "connection.php";
  $query_tahunan = mysql_query("select * from penjualan WHERE YEAR( tanggal_pembelian ) = YEAR( NOW()) ");

  while ($data_tahunan = mysql_fetch_array($query_tahunan)) {
    ?>
    <tr>
      <td><?php echo $data_tahunan["kode_penjualan"]; ?></td>
      <td><a href='tampil_barang.php?kode=".$data['kode']."'><?php echo $data_tahunan['kode_barang'] ?></td>
      <td><?php echo $data_tahunan['jumlah_pembelian']; ?></td>
      <td><?php echo $data_tahunan['tanggal_pembelian']; ?></td>
      <td><?php echo $data_tahunan['total']; ?></td>
      
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

