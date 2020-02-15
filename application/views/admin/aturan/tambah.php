<h3>Tambah Aturan</h3>
<hr>
<form method="post">
	<div class="form-group">
		<label>Nama Aturan</label>
		<input style="width: 40%" class="form-control" type="text" name="nama_aturan" required="">
	</div>
	<?php foreach ($himpunan as $key => $value): ?>
		<div class="form-group">
			<label><?php echo $value['nama'] ?></label>
			<select style="width: 40%" class="form-control" name="id_himpunan[<?php echo $key ?>]">
				<option value="">Pilih Himpunan</option>
				<?php foreach ($value['data'] as $index => $data): ?>
					<option value="<?php echo $data['id_himpunan'] ?>"><?php echo $data['nama_himpunan'] ?></option>
				<?php endforeach ?>
			</select>
		</div>
	<?php endforeach ?>
	<div class="form-group">
		<label>Keputusan</label>
		<select style="width: 40%" class="form-control" name="id_keputusan" required>
			<option value="">Pilih Keputusan</option>
			<?php foreach ($keputusan as $key => $value): ?>
				<option value="<?php echo $value['id_keputusan'] ?>"><?php echo $value['nama_keputusan'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div>
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("admin/aturan") ?>">Batal</a>
	</div>
</form>

<?php if($gagal): ?>
	<div class="alert alert-danger"><?php echo $gagal ?></div>
<?php endif ?>
