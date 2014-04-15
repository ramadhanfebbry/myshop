<h1>Penjualan</h1>
<form name="input_data" action="resources/proses_penjualan.php" method="post">
        <table border="0" cellpadding="5" cellspacing="0">
            <tbody>
                
                <tr>
                    <td>kode barang</td>
                    <td>:</td>
                    <td><input type="text" name="kode_barang" maxlength="10" required="required" /></td>
                </tr>
                <tr>
                    <td>jumlah pembelian</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah_pembelian" maxlength="10" required="required" /></td>
                </tr>
                
                <tr>
                    <td align="right" colspan="3"><input type="submit" name="submit" value="submit" /></td>
                </tr>
            </tbody>
        </table>
    </form>