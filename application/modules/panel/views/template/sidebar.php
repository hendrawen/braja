<!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url();?>assets/assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $this->session->userdata('username')?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo base_url();?>" >
                        <i class="icon-table"></i> Dashboard
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Master Data     
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">10</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href=""><i class="icon-angle-right"></i> Suplier </a></li>
                         <li class=""><a href=""><i class="icon-angle-right"></i> Pelanggan </a></li>
                        <li class=""><a href=""><i class="icon-angle-right"></i> Barang </a></li>
                        <li class=""><a href=""><i class="icon-angle-right"></i> Stok </a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Forms
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="forms_general.html"><i class="icon-angle-right"></i> General </a></li>
                        <li class=""><a href="forms_advance.html"><i class="icon-angle-right"></i> Advance </a></li>
                        <li class=""><a href="forms_validation.html"><i class="icon-angle-right"></i> Validation </a></li>
                        <li class=""><a href="forms_fileupload.html"><i class="icon-angle-right"></i> FileUpload </a></li>
                        <li class=""><a href="forms_editors.html"><i class="icon-angle-right"></i> WYSIWYG / Editor </a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Pages
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="pages_calendar.html"><i class="icon-angle-right"></i> Calendar </a></li>
                        <li><a href="pages_timeline.html"><i class="icon-angle-right"></i> Timeline </a></li>
                        <li><a href="pages_social.html"><i class="icon-angle-right"></i> Social </a></li>
                        <li><a href="pages_pricing.html"><i class="icon-angle-right"></i> Pricing </a></li>
                        <li><a href="pages_offline.html"><i class="icon-angle-right"></i> Offline </a></li>
                        <li><a href="pages_uc.html"><i class="icon-angle-right"></i> Under Construction </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Charts
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">



                        <li><a href="charts_line.html"><i class="icon-angle-right"></i> Line Charts </a></li>
                        <li><a href="charts_bar.html"><i class="icon-angle-right"></i> Bar Charts</a></li>
                        <li><a href="charts_pie.html"><i class="icon-angle-right"></i> Pie Charts </a></li>
                        <li><a href="charts_other.html"><i class="icon-angle-right"></i> other Charts </a></li>
                    </ul>
                </li>

                <li><a href="<?php echo base_url();?>panel/admin"><i class="icon-film"></i> Admin </a></li>
                <li><a href=""><i class="icon-table"></i> Data Tables </a></li>
                <li><a href=""><i class="icon-map-marker"></i> Maps </a></li>
                 
                <li><a href="<?php echo base_url('auth/logout');?>"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->