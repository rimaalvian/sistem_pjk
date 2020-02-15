<h3>Edit Password</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Password Lama</label>
		<input style="width: 40%" class="form-control" type="password" name="password_lama" required>
	</div>
	<div class="form-group">
		<label>Password Baru</label>
		<input style="width: 40%" class="form-control" type="password" name="password_baru" required>
	</div>
	<div class="form-group">
		<label>Konfirmasi Password Baru</label>
		<input style="width: 40%" class="form-control" type="password" name="password_konfirmasi" required>
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("client/profil") ?>">Batal</a>
	</div>
</form>