<h1>Penjualan</h1>
<form name="input_data" action="resources/proses_penjualan.php" method="post">
        <table class="table table-bordered table-stripped" cellpadding="5" cellspacing="0">
            <tr>
                <th>kode barang</th>
                <th>Nama Barang</th>
                <th>jumlah pembelian</th>
                
                </tr>
                <tr>
                <td>
                <input name="kode[]" type="text" class="kode_brg">
                </td>
                <td>
                <input name="nama_barang[]" type="text">
                </td>
                <td>
                <input name="jumlah[]" type="text">
                </td>
                </tr>
        
        <tr>
                    <td align="right" colspan="3"><input type="submit" name="submit" value="submit" /></td>
                </tr>
                </table>
    </form>

<?php
        require_once "connection.php";

        $query = mysql_query("select nama, kode from barang GROUP BY kode");
        echo "<script> var kode_lists = Array();";
        while ($entry = mysql_fetch_array($query)) {
            echo "kode_lists.push(['". $entry["nama"]."', '". $entry["kode"]."']);";
        }
        
        echo "</script>";
        

    ?>
      
