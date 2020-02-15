<h3>Edit Saran <?php echo $saran['id_saran'] ?></h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Isi saran</label>
		<textarea style="width: 40%" class="form-control" name="nama_saran"><?php echo $saran['nama_saran'] ?></textarea>
	</div>
	<div class="form-group">
		<label>Risiko</label>
		<select style="width: 40%" class="form-control" name="id_resiko">
			<option value="">Pilih</option>
			<?php foreach ($resiko as $index => $data): ?>
				<option value="<?php echo $data['id_resiko'] ?>" <?php if($saran['id_resiko']==$data['id_resiko']){echo "selected";} ?> ><?php echo $data['nama_resiko'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div>
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("admin/saran") ?>">Batal</a>
	</div>
</form>