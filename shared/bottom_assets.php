

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
    });
      var _gauges = _gauges || [];
      (function() {
    })();

    // $("input[name=kode]").attr("data-source", values.split(","));
$("input[name=kode]").typeahead({source: values})  
</script>

