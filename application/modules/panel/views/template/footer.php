<!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url('assets/assets/plugins/jquery-2.0.3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php //echo base_url('assets/assets/plugins/flot/jquery.flot.js');?>"></script>
    <script src="<?php //echo base_url('assets/assets/plugins/flot/jquery.flot.resize.js');?>"></script>
    <script src="<?php //echo base_url('assets/assets/plugins/flot/jquery.flot.time.js');?>"></script>
     <script  src="<?php //echo base_url('assets/assets/plugins/flot/jquery.flot.stack.js');?>"></script>
    <script src="<?php //echo base_url('assets/assets/js/for_index.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/plugins/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/plugins/dataTables/dataTables.bootstrap.js');?>"></script>
    <script>
         $(document).ready(function () {
            var table = $('#table').dataTable({
               "processing": true, //Feature control the processing indicator.
               "serverSide": true, //Feature control DataTables' server-side processing mode.
               "order": [], //Initial no order.

               // Load data for the table's content from an Ajax source
               "ajax": {
                   "url": "<?php echo base_url('pelanggan/ajax_list')?>",
                   "type": "POST",
                   "data": function ( data ) {
                        data.kota = $('#kota').val();
                    }
               },

               //Set column definition initialisation properties.
               "columnDefs": [
               {
                   "targets": [ 0 ], //first column / numbering column
                   "orderable": false, //set not orderable
               },
               ],
             });

             $('#btn-filter').click(function(){ //button filter event click
                 $('#table').DataTable().ajax.reload();//reload datatable ajax   //just reload table
             });
             $('#btn-reset').click(function(){ //button reset event click
                 $('#form-filter')[0].reset();
                 $('#table').DataTable().ajax.reload();//reload datatable ajax 
             });
         });
    </script>

    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
