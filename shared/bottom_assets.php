

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="./assets/js/bootstrap-transition.js"></script>
    <script src="./assets/js/bootstrap-alert.js"></script>
    <script src="./assets/js/bootstrap-modal.js"></script>
    <script src="./assets/js/bootstrap-dropdown.js"></script>
    <script src="./assets/js/bootstrap-scrollspy.js"></script>
    <script src="./assets/js/bootstrap-tab.js"></script>
    <script src="./assets/js/bootstrap-tooltip.js"></script>
    <script src="./assets/js/bootstrap-popover.js"></script>
    <script src="./assets/js/bootstrap-button.js"></script>
    <script src="./assets/js/bootstrap-collapse.js"></script>
    <script src="./assets/js/bootstrap-carousel.js"></script>
    <script src="./assets/js/bootstrap-typeahead.js"></script>
    <script src="./assets/js/bootstrap-affix.js"></script>

    <script src="./assets/js/holder/holder.js"></script>
    <script src="./assets/js/google-code-prettify/prettify.js"></script>
    <script src="./assets/js/bootstrap-datepicker.js"></script>

    <script src="./assets/js/application.js"></script>
    <script type="text/javascript" src="assets/js/jquery.print.js"></script>


    <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
    <link href="assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />



    <!-- Analytics
    ================================================== -->
    <script type="text/javascript">
    $(function() {
        $(".harianPrint").click(function() {
        // Print the DIV.
            $("#harianPrintdiv").print();
            return (false);
        });

        $(".mingguanPrint").click(function() {
        // Print the DIV.
            $("#mingguanPrintdiv").print();
            return (false);
        });

         $(".bulananPrint").click(function() {
        // Print the DIV.
            $("#bulananPrintdiv").print();
            return (false);
        });

          $(".tahunanPrint").click(function() {
        // Print the DIV.
            $("#tahunanPrintdiv").print();
            return (false);
        });
          
        $(".fakturPrint").click(function() {
        // Print the DIV.
            $(".detail_faktur").print();
            return (false);
        });

        $(".tambahStock").click(function(){
            $("#myModal2 form input[name=kode]").val($(this).attr("data-id"));
            $("#myModal2").modal();
        })

        $(".suratJalanPrint").click(function() {
        // Print the DIV.
            $(".detail_surat_jalan").print();
            return (false);
        });
    });
      var _gauges = _gauges || [];
      (function() {
    })();

    // $("input[name=kode]").attr("data-source", values.split(","));
if(typeof arr_vals != 'undefined') {

    $("input[name=jenis_barang]").typeahead({source: arr_vals})  

}


if(typeof kode_lists != 'undefined') {
    
    $("input.kode_brg[data-list=0]").autocomplete({
        data: kode_lists
        , minChars: 1
    })

    // $("input.kode_brg").trigger("autocompleteselect");

}

</script>    

<div id="myModal2" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Tambah Jumlah Stok</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal formLogin" action="resources/tambah_stok.php" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputUsername">Jumlah</label>
    <div class="controls">
      <input type="text" id="inputUsername" placeholder="Jumlah" name="jumlah">
    </div>
  </div>
  
  <div class="control-group">
    <div class="controls">
        <input type="hidden" name="kode">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
  </div>

</form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
  </div>
</div>