
        <h3 style="margin-top:0px">Admin <?php echo $button ?></h3>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" required/>
        </div>
	    <div class="form-group">
            <!-- <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" /> -->
            <?php if ($button == 'Create') { ?>
                <label for="varchar">Password <?php echo form_error('password') ?></label>
                <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" required/>
            <?php } elseif ($button == 'Update') { ?>
                <label for="varchar">Password Baru </label>
                <input type="text" class="form-control" name="password" id="password" placeholder="Isikan Password Baru"/>
            <?php } ?>
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" required/>
        </div>
	    <!-- <div class="form-group">
            <label for="timestamp">Tgl Register <?php echo form_error('tgl_register') ?></label>
            <input type="text" class="form-control" name="tgl_register" id="tgl_register" placeholder="Tgl Register" value="<?php echo $tgl_register; ?>" />
        </div> -->
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('panel/admin') ?>" class="btn btn-warning">Cancel</a>
	</form>
    