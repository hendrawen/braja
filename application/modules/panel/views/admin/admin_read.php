
        <h3 style="margin-top:0px">Admin Detail</h3>
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Tgl Register</td><td><?php echo $tgl_register; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('panel/admin') ?>" class="btn btn-danger">Cancel</a></td></tr>
	</table>
        