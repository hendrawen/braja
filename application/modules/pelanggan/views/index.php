<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            DataTables Advanced Tables
        </div>
        <div class="col-sm-4">
            <?php echo $form_kota; ?>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>Telp</th>
                            <th>Nama Dagang</th>
                            <th>Alamat</th>
                            <th>Photo</th>
                            <th>Kota</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Lat</th>
                            <th>Long</th>
                            <th>status</th>
                            <th>Surveyor</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>ID Pelanggan</th>
                          <th>Nama</th>
                          <th>Telp</th>
                          <th>Nama Dagang</th>
                          <th>Alamat</th>
                          <th>Photo</th>
                          <th>Kota</th>
                          <th>Kelurahan</th>
                          <th>Kecamatan</th>
                          <th>Lat</th>
                          <th>Long</th>
                          <th>status</th>
                          <th>Surveyor</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>
</div>

</div>

</div>
<!--END PAGE CONTENT -->
</div>

<script>

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('pelanggan/ajax_list')?>",
            "type": "POST"
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
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });

});

</script>

<!--END MAIN WRAPPER -->
