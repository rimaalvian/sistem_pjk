<h3>Daftar Aturan</h3>
<hr>
<div class="table-responsive">
	<table class="table table-condensed table-hover table-striped" id="thetable">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Aturan</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($aturan as $index => $data): ?>
				<tr>
					<td><?php echo $data['nama_aturan'] ?></td>
					<td>IF <?php echo $data['detail'] ?> THEN RESIKO <?php echo $data['nama_keputusan'] ?></td>
					<td>
						<a href="<?php echo base_url("admin/aturan/detail/".$data['id_aturan']) ?>"><i class="fa fa-info"></i> Detail</a>
						<a href="<?php echo base_url("admin/aturan/ubah/".$data['id_aturan']) ?>"><i class="fa fa-edit"></i> Edit</a>
						<a href="<?php echo base_url("admin/aturan/hapus/".$data['id_aturan']) ?>" onclick="return confirm('Apakah Anda Akan Menghapus Aturan?')"><i class="fa fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<a class="btn btn-primary" href="<?php echo base_url('admin/aturan/tambah') ?>"><i class="fa fa-plus"></i> Tambah Aturan</a>