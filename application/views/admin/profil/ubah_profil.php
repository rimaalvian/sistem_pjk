<h3>Edit Profil</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Username</label>
		<input style="width: 40%" class="form-control" type="text" name="nama_admin" value="<?php echo $admin['nama_admin']?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input style="width: 40%" class="form-control" type="email" name="email_admin" value="<?php echo $admin['email_admin']?>">
	</div>
	<div>
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("admin/profil") ?>">Batal</a>
	</div>
</form>