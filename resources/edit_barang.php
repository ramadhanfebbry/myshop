<?php
        require_once "connection.php";
        $kode_barang = $_GET["kode"];
        $query = mysql_query("select * from barang where kode='$kode_barang'");
        while ($data = mysql_fetch_array($query)) {
        $query = mysql_query("select jenis_barang from barang GROUP BY jenis_barang");
        echo "<script> var arr_vals = Array();";
        while ($entry = mysql_fetch_array($query)) {
            echo "arr_vals.push('".$entry["jenis_barang"]."');";
        }
        
        echo "</script>";
        
    ?>
    

    <h1>Edit Barang</h1>
      <img src="<?php echo $data["img_tmp"] ?>" />
<form name="input_data" action="update.php" method="post"  enctype='multipart/form-data'>
    <table border="0" cellpadding="5" cellspacing="0">
        <tbody>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td>
                <input type="hidden" name="kode" required="required" value="<?php echo $data["kode"] ?>"/>    
                <input type="text" maxlength="50" required="required" autocomplete="off" disabled value="<?php echo $data["kode"] ?>"/>
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
                        $selected = ($result["kode"] == $data["id_supplier"]) ? 'selected' : '';
                        echo "<OPTION VALUE='".$result["kode"]."' $selected>".$result["nama"]."</OPTION>";
                    }
                ?>
                </select>

                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" maxlength="50" required="required" value="<?php echo $data["nama"] ?>"/></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td><input type="text" name="jenis_barang" maxlength="50" required="required" value="<?php echo $data["jenis_barang"] ?>" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>Harga beli</td>
                <td>:</td>
                <td><input type="number" name="harga_beli" maxlength="10" required="required" value="<?php echo $data["harga_beli"] ?>"/></td>
            </tr>
            <tr>
                <td>Harga jual</td>
                <td>:</td>
                <td><input type="number" name="harga_jual" maxlength="10" required="required" value="<?php echo $data["harga_jual"] ?>"/></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="number" name="jumlah" maxlength="10" required="required" value="<?php echo $data["jumlah"] ?>"/></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><input type="text" name="tanggal_masuk" maxlength="10" required="required" value="<?php echo $data["tanggal_masuk"] ?>"/></td>
            </tr>
             <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="file" />
                <input type="hidden" name="img_file"  value="<?php echo $data["img_tmp"] ?>"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><textarea name="keterangan"><?php echo $data["keterangan"] ?></textarea></td>
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

    $("input[name=tanggal_masuk]").val(curr_month + "/" + curr_date  + "/" + curr_year)
</script>
<?php
        }
    ?>