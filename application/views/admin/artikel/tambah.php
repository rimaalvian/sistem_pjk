<h3>Tambah Artikel</h3>
<hr>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul Artikel</label>
		<input style="width: 40%" class="form-control" type="text" name="judul_artikel">
	</div>
	<div class="form-group">
		<label>Isi Artikel</label>
		<textarea style="width: 40%" class="form-control" type="text" name="isi_artikel" id="theeditor"></textarea>
	</div>
	<div class="form-group">
		<label>Gambar Artikel</label>
		<input type="file" style="width: 40%" class="form-control" name="gambar_artikel">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan</button>
		<a class="btn btn-primary" href="<?php echo base_url("admin/artikel") ?>">Batal</a>
	</div>
</form>