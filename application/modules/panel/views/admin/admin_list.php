
        
        <div class="panel panel-default">
                <div class="panel-heading" style="margin-bottom:10px">
                    <h3>Admin List</h3>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor(site_url('panel/admin/create'),'Create', 'class="btn btn-primary"'); ?>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Tgl Register</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                            foreach ($admin_data as $admin)
                                            {
                                                ?>
                                    <tr class="odd gradeX">
                                        <td width="80px"><?php echo $no++?></td>
                                        <td><?php echo $admin->username ?></td>
                                        <td><?php echo $admin->password ?></td>
                                        <td><?php echo $admin->email ?></td>
                                        <td><?php echo $admin->tgl_register ?></td>
                                        <td style="text-align:center" width="200px">
                                            <a href="<?=base_url()?>panel/admin/read/<?=$admin->id?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i></a>
                                            <a href="<?=base_url()?>panel/admin/update/<?=$admin->id?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="<?=base_url()?>panel/admin/delete/<?=$admin->id?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus Data Ini???')"><i class="glyphicon glyphicon-trash"></i></a>
                                            <?php 
                                            //echo anchor(site_url('admin/read/'.$admin->id),'Read'); 
                                            //echo ' | '; 
                                            //echo anchor(site_url('admin/update/'.$admin->id),'Update'); 
                                            //echo ' | '; 
                                            //echo anchor(site_url('admin/delete/'.$admin->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                            ?>
                                        </td>
                                    </tr>
                                            <?php
                                        }
                                        ?>                                    
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#"></a>
                                    <?php echo anchor(site_url('admin/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                                    <?php echo anchor(site_url('admin/word'), 'Word', 'class="btn btn-primary"'); ?>
                                 </div>
                            </div>
                        </div>
                       
                    </div>
        </div>
        