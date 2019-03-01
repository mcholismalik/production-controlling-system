    <script src="<?php echo base_url();?>berkas/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url();?>berkas/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url();?>berkas/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>berkas/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>berkas/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url();?>berkas/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="<?php echo base_url();?>berkas/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url();?>berkas/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url();?>berkas/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url();?>berkas/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url();?>berkas/js/plugins/chartJs/Chart.min.js"></script>
    
    <!-- Datapicker -->
    <script src="<?php echo base_url();?>berkas/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    
    <!-- Daterangepicker -->
    <script src="<?php echo base_url();?>berkas/js/plugins/daterangepicker/daterangepicker.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();

        $('.input-daterange').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            format: "dd/mm/yyyy"
        });
    });
</script>