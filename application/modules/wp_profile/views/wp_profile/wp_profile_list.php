
        <h2 style="margin-top:0px">Wp_profile List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('wp_profile/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('wp_profile/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('wp_profile'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Perusahaan</th>
		<th>Alamat</th>
		<th>No Telp</th>
		<th>Email</th>
		<th>Website</th>
		<th>Action</th>
            </tr><?php
            foreach ($wp_profile_data as $wp_profile)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $wp_profile->nama_perusahaan ?></td>
			<td><?php echo $wp_profile->alamat ?></td>
			<td><?php echo $wp_profile->no_telp ?></td>
			<td><?php echo $wp_profile->email ?></td>
			<td><?php echo $wp_profile->website ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('wp_profile/read/'.$wp_profile->id),'Read');
				echo ' | ';
				echo anchor(site_url('wp_profile/update/'.$wp_profile->id),'Update');
				echo ' | ';
				echo anchor(site_url('wp_profile/delete/'.$wp_profile->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('wp_profile/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('wp_profile/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
