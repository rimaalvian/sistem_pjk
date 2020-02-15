<h3>Profil</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input  style="width: 40%" class="form-control" type="text" name="nama_admin" value="<?php echo $admin['nama_admin']?>" readonly>
	</div>
	<div class="form-group">
		<label>Email</label>
		<input style="width: 40%" class="form-control" type="text" name="email_admin" value="<?php echo $admin['email_admin']?>" readonly>
	</div>
	<div class="form-group">
		<a class="btn btn-primary" href="<?php echo base_url("admin/profil/ubah_profil/".$admin['id_admin']) ?>">Edit Profil</a>
		<a class="btn btn-primary" href="<?php echo base_url("admin/profil/ubah_password/".$admin['id_admin']) ?>">Edit Password</a>
	</div>
</form>