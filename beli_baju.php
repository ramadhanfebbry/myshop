<html>
<head>
    <title>MYSHOP</title>
</head>

<body>
<h1>Form Beli Barang</h1>

    <form name="input_data" action="hitung.php" method="post">
        <table border="0" cellpadding="5" cellspacing="0">
            <tbody>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td>
                    <?php
                    include("connection.php");
                    $query = "SELECT * from barang";
                    $res = mysql_query($query);
                    echo "<select name = 'id_barang'>";
                    while (($row = mysql_fetch_array($res)))
                    {
                          echo "<option value ='".$row['id']."'>".$row['nama']."</option>";
                    }
                    echo "</select>";
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" maxlength="10" required="required" /></td>
                </tr>
                
                <tr>
                    <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>