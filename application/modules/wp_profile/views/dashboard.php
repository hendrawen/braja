<?php
        $this->load->view('panel/template/header');
        $this->load->view('panel/template/navbar');
        $this->load->view('panel/template/sidebar');

?>

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height: 1200px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h3><i class="fa fa-angle-right"></i> <?php echo $judul; ?> <i class="icon-angle-right"></i> <?php echo $sub_judul; ?></h3>
                    </div>
                </div>
                  <hr />
            <?php $this->load->view($content);?>

        </div>
        <!--END PAGE CONTENT -->


    </div>

    <!--END MAIN WRAPPER -->

    <?php $this->load->view('panel/template/footer');?>
