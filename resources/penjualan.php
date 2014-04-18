
<script type="text/javascript">
    function addItemPenjualan(){
        var lastItem = $(".table-penjualan tbody tr[data-list-parent]").last();
        var nextListId = parseInt(lastItem.attr("data-list-parent")) + 1;
        $(".table-penjualan tbody").append("<tr data-list-parent='"+ nextListId + "'>"+
            "<td><input name='kode[]' type='text' class='kode_brg' data-list='"+ nextListId+"'></td>"+
            "<td><input name='nama_barang[]' type='text' class='nama_brg' data-list='"+nextListId+"' disabled></td>"+
            "<td><input name='jumlah[]' type='number'></td>"+
            "<td><a href='#' onclick='removeItem("+nextListId+")' class='btn btn-mini btn-danger'><i class='icon-remove'></i></a></td></tr>")
      
        $("input.kode_brg[data-list='"+nextListId+"']").autocomplete({
            data: kode_lists
            , minChars: 1
        })

      }
    function removeItem(itemNo){
        $(".table-penjualan tbody tr[data-list-parent='"+ itemNo + "']").remove()
    }  

    function hitungPenjualan(){
        var hitung = 0;
        $.each($("input[name='jumlah[]']"), function(i, dom){
            if($(dom).val().length > 0){
                hitung = hitung + (harga_lists[$(dom).parent().parent().find("input.kode_brg").val()] * parseInt($(dom).val()));
            }
        })
        $("#totalPenjualan").val(hitung);
    }


</script>
<h1>Penjualan</h1>
<form name="input_data" action="resources/proses_penjualan_baru.php" method="post">
<table class="table table-bordered table-stripped" cellpadding="5" cellspacing="0">
<tr>
    <th width="35%">Nama Pembeli</th>
    <th width="45%">Alamat</th>
    <th width="30%">Telepon</th>

</tr>
<tr>
    <td><input type="text" name="nama_pembeli"></td>
    <td><textarea name="alamat" style="width:95%"></textarea></td>
    <td><input type="text" name="telp"></td>
</tr>
</table>
        <table class="table table-penjualan table-bordered table-stripped" cellpadding="5" cellspacing="0">
            <thead>
            <tr>
                <th width="35%">kode barang</th>
                <th>Nama Barang</th>
                <th colspan="2" width="10%">jumlah pembelian</th>
                
                </tr>
                </thead>
                <tbody>
                <tr data-list-parent="0">
                    <td>
                        <input name="kode[]" type="text" class="kode_brg" data-list="0">
                    </td>
                    <td>
                        <input name="nama_barang[]" type="text" class="nama_brg" data-list="0" 
                    disabled="disabled">
                    </td>
                    <td width="10%">
                        <input name="jumlah[]" type="number">
                    </td>
                    <td>
                        
                    </td>
                </tr>
        </tbody>
        <tfoot>
                <tr>
                    <td align="right" colspan="4">
                        <a href="javascript:void(0)" class="btn btn-mini" onclick="addItemPenjualan()"><i class="icon-plus"></i> Add</a>
                        <a href="javascript:void(0)" class="btn btn-mini btn-info" onclick="hitungPenjualan()">Hitung</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Total Penjualan : </b></td>
                    <td colspan="2">
                    <div class="input-prepend input-append">
                      <span class="add-on">$</span>
                      <input class="span3" id="totalPenjualan" type="text">
                      <span class="add-on">.00</span>
                    </div>
                    </td>

                </tr>
                </tfoot>
            </table>
            <b>Cetak Ke :</b>
            <label class="radio">
            <input type="radio" name="pilihan_cetak" value="faktur" checked> Faktur</label>
            <label class="radio">
            <input type="radio" name="pilihan_cetak" value="surat_jalan"> Surat Jalan</label>
            
            <br />
            <input type="submit" value="Submit" class="btn btn-large btn-primary">
    </form>

<?php
        require_once "connection.php";

        $query = mysql_query("select nama, kode, harga_jual from barang GROUP BY kode");
        echo "<script> var kode_lists = Array();var dummy_lists = Array();var harga_lists = Array();";
        while ($entry = mysql_fetch_array($query)) {
            echo "dummy_lists['".$entry["kode"]."'] = '". $entry["nama"]."';";    
            echo "harga_lists['".$entry["kode"]."'] = '". $entry["harga_jual"]."';";    
            echo "kode_lists.push(['". $entry["kode"]."', '". $entry["nama"]."']);";
        }
        
        echo "</script>";
        

    ?>
      
