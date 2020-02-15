<h3>Edit Himpunan</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Nama Faktor Resiko</label>
		<select style="width: 40%" class="form-control" name="id_variabel">
			<option>Pilih</option>
			<?php foreach ($variabel as $index => $data): ?>
				<option value="<?php echo $data['id_variabel'] ?>" <?php if($himpunan['id_variabel']==$data['id_variabel']){echo "selected";} ?> ><?php echo $data['nama_variabel'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Nama Himpunan</label>
		<input style="width: 40%" class="form-control" type="text" name="nama_himpunan" value="<?php echo $himpunan['nama_himpunan']?>">
	</div>
	<div class="form-group">
		<label>Batas Bawah</label>
		<input style="width: 40%" class="form-control" type="text" name="batas_bawah_himpunan" value="<?php echo $himpunan['batas_bawah_himpunan']?>">
	</div>
	<div class="form-group">
		<label>Batas Tengah 1</label>
		<input style="width: 40%" class="form-control" type="text" name="batas_tengah_1_himpunan" value="<?php echo $himpunan['batas_tengah_1_himpunan']?>">
	</div>
	<div class="form-group">
		<label>Batas Tengah 2</label>
		<input style="width: 40%" class="form-control" type="text" name="batas_tengah_2_himpunan" value="<?php echo $himpunan['batas_tengah_2_himpunan']?>">
	</div>
	<div class="form-group">
		<label>Batas Atas</label>
		<input style="width: 40%" class="form-control" type="text" name="batas_atas_himpunan" value="<?php echo $himpunan['batas_atas_himpunan']?>">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("admin/himpunan") ?>">Batal</a>

	</div>
</form>