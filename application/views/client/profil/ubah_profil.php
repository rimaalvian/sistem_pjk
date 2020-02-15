<h3>Edit Profil</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Nama</label>
		<input style="width: 40%" class="form-control" type="text" name="nama_client" value="<?php echo $client['nama_client']?>">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input style="width: 40%" class="form-control" type="date" name="tanggal_lahir_client" value="<?php echo $client['tanggal_lahir_client']?>">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<br>
		<input type="radio" name="jenis_kelamin_client" value="Pria" <?php if($client['jenis_kelamin_client']=="Pria"){echo "checked";} ?>>Pria
		<br>
		<input type="radio" name="jenis_kelamin_client" value="Wanita" <?php if($client['jenis_kelamin_client']=="Wanita"){echo "checked";} ?>>Wanita
	</div>
	<div class="form-group">
		<label>Email</label>
		<input style="width: 40%" class="form-control" type="email" name="email_client" value="<?php echo $client['email_client']?>">
	</div>
	<div>
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("client/profil") ?>">Batal</a>
	</div>
</form>