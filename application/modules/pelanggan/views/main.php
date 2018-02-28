<div class="row">
<div class="col-lg-12">
  <div class="panel panel-primary">
      <div class="panel-heading">
        Filter Data
      </div>
      <div class="panel-body">
            <form id="form-filter" class="form-horizontal">
                <div class="form-group">
                    <label for="kota" class="col-sm-2 control-label">Kota</label>
                    <div class="col-sm-4">
                        <?php echo $form_kota; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LastName" class="col-sm-2 control-label"></label>
                    <div class="col-sm-4">
                        <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                        <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </form>
        </div>
  </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            List Data Pelanggan
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


<!--END MAIN WRAPPER -->
