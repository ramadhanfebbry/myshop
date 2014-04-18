<?php
        require_once "connection.php";

        $query = mysql_query("select jenis_barang from barang GROUP BY jenis_barang");
        echo "<script> var arr_vals = Array();";
        while ($entry = mysql_fetch_array($query)) {
            echo "arr_vals.push('".$entry["jenis_barang"]."');";
        }
        
        echo "</script>";
        

    ?>
      
<h1>Tambah Barang</h1>
<form name="input_data" action="resources/proses_tambah_barang.php" method="post"  enctype='multipart/form-data'>
    <table border="0" cellpadding="5" cellspacing="0">
        <tbody>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td>

                <input type="text" name="kode" maxlength="50" required="required" autocomplete="off"/>
                </td>
            </tr>
             <tr>
                <td>Supplier</td>
                <td>:</td>
                <td>

                <select name="id_supplier" required="required">
                <option value=""> --Select Category-- </option>
                <?php 
                $sql= mysql_query("SELECT kode, nama from supplier GROUP BY kode");
                    while($result = mysql_fetch_array($sql)){
                        echo "<OPTION VALUE='".$result["kode"]."'>".$result["nama"]."</OPTION>";
                    }
                ?>
                </select>

                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" maxlength="50" required="required" /></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td><input type="text" name="jenis_barang" maxlength="50" required="required" /></td>
            </tr>
            <tr>
                <td>Harga beli</td>
                <td>:</td>
                <td><input type="number" name="harga_beli" maxlength="10" required="required" /></td>
            </tr>
            <tr>
                <td>Harga jual</td>
                <td>:</td>
                <td><input type="number" name="harga_jual" maxlength="10" required="required" /></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="number" name="jumlah" maxlength="10" required="required" /></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><input type="text" name="tanggal_masuk" maxlength="10" required="required" /></td>
            </tr>
             <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="file" /></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>

            <tr>
                <td align="right" colspan="3">
                <input type="submit" name="submit" value="Simpan" class="btn btn-primary" />
                <input type="reset" name="reset" value="Reset" class="btn btn-danger" />
                </td>
            </tr>
        </tbody>
    </table>
</form>
<script>
    var d = new Date();
    var curr_date = d.getDate();
    var curr_month = d.getMonth(); //Months are zero based
    var curr_year = d.getFullYear();

    $("input[name=tanggal_masuk]").val(curr_year + "/" + curr_month  + "/" + curr_date)
</script>