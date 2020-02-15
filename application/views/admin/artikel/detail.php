<h3>Detail Artikel</h3>
<hr>
<table class="table">
	<tr>
		<th width="15%">Judul</th>
		<th width="1%">:</th>
		<th><?php echo $artikel['judul_artikel'] ?></th>
	</tr>
	<tr>
		<th>Tanggal</th>
		<th>:</th>
		<th><?php echo $artikel['tanggal_artikel'] ?></th>
	</tr>
	<tr>
		<th>Isi</th>
		<th>:</th>
		<th><?php echo $artikel['isi_artikel'] ?></th>
	</tr>
	<tr>
		<th>Gambar</th>
		<th>:</th>
		<th><img src="<?php echo base_url("assets/".$artikel['gambar_artikel']) ?>" width="100px";></th>
	</tr>
</table>
<a class="btn btn-primary" href="<?php echo base_url('admin/artikel') ?>">Kembali</a>