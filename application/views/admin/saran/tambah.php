<h3>Tambah Saran</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Saran</label>
		<textarea class="form-control" style="width: 40%" class="form-control" name="nama_saran"></textarea>
	</div>
	<div class="form-group">
		<label>Risiko</label>
		<select style="width: 40%" class="form-control" name="id_resiko">
			<option value="">Pilih</option>
			<?php foreach ($resiko as $index => $data): ?>
				<option value="<?php echo $data['id_resiko'] ?>"><?php echo $data['nama_resiko'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div>
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("admin/saran") ?>">Batal</a>
	</div>
</form>