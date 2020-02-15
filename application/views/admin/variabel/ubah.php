	<h3>Edit Faktor Risiko</h3>
	<hr>
	<form method="post">
		<div class="form-group">
			<label>Nama Faktor Risiko</label>
			<input style="width: 40%" class="form-control" type="text" name="nama_variabel" value="<?php echo $variabel['nama_variabel']?>">
		</div>
		<div class="form-group">
			<button class="btn btn-primary">Simpan</button>
			<a class="btn btn-primary" href="<?php echo base_url("admin/variabel") ?>">Batal</a>
		</div>
	</form>
	<?php if($gagal): ?>
		<div class="alert alert-danger"><?php echo $gagal ?></div>
	<?php endif ?>