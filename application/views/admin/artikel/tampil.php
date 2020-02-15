<h3>Daftar Artikel</h3>
<hr>
<div class="table-responsive">
	<table class="table table-condensed table-hover table-striped" id="thetable">
		<thead>
			<tr>
				<th width="5%">Nomor</th>
				<th width="25%">Judul</th>
				<th width="25%">Gambar</th>
				<th width="25%">Tanggal</th>
				<th width="30%">Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($artikel as $index => $data): ?>
				<tr>
					<td><?php echo $index+1 ?></td>
					<td><?php echo $data['judul_artikel'] ?></td>
					<td><img src="<?php echo base_url("assets/".$data['gambar_artikel']) ?>" width="100px";></td>
					<td><?php echo $data['tanggal_artikel'] ?></td>
					<td>
						<a href="<?php echo base_url("admin/artikel/detail/".$data['id_artikel']) ?>"><i class="fa fa-info"></i> Detail</a>
						<a href="<?php echo base_url("admin/artikel/ubah/".$data['id_artikel']) ?>"><i class="fa fa-edit"></i> Edit</a>
						<a href="<?php echo base_url("admin/artikel/hapus/".$data['id_artikel']) ?>" onclick="return confirm('Apakah Anda Akan Menghapus Artikel Ini?')"><i class="fa fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<a class="btn btn-primary" href="<?php echo base_url("admin/artikel/tambah") ?>"><i class="fa fa-plus"></i> Tambah artikel</a>