<h1>Tambah Barang</h1>
<form name="input_data" action="resources/proses_tambah_barang.php" method="post"  enctype='multipart/form-data'>
    <table border="0" cellpadding="5" cellspacing="0">
        <tbody>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" maxlength="50" required="required" /></td>
            </tr>
            <tr>
                <td>Harga</td>  
                <td>:</td>
                <td><input type="text" name="harga" maxlength="10" required="required" /></td>
            </tr>
            <tr>
                <td>Jumlah</td>  
                <td>:</td>
                <td><input type="text" name="jumlah" maxlength="10" required="required" /></td>
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
                <button type="submit" class="btn btn-primary">Save</button>
                <input type="reset" name="reset" value="Reset" class="btn btn-danger" />
                </td>
            </tr>
        </tbody>
    </table>
</form>