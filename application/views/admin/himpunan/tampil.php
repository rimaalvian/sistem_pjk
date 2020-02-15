<h3>Daftar Himpunan Faktor Resiko</h3>
<hr>
<div class="table-responsive">
	<table class="table table-condensed table-hover table-striped" id="thetable">
		<thead>
			<tr>
				<td width="5%">Nomor</td>
				<td>Faktor Resiko</td>
				<td>Himpunan</td>
				<td width="30%">Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($himpunan as $index => $data): ?>
				<tr>
					<td><?php echo $index+1 ?></td>
					<td><?php echo $data['nama_variabel'] ?></td>
					<td><?php echo $data['nama_himpunan'] ?></td>
					<td>
						<a href="<?php echo base_url("admin/himpunan/detail/".$data['id_himpunan']) ?>"><i class="fa fa-info"></i> Detail</a>
						<a href="<?php echo base_url("admin/himpunan/ubah/".$data['id_himpunan']) ?>"><i class="fa fa-edit"></i> Edit</a>
						<a href="<?php echo base_url("admin/himpunan/hapus/".$data['id_himpunan']) ?>" onclick="return confirm('Apakah Anda Akan Menghapus Himpunan Ini?')"><i class="fa fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<a class="btn btn-primary" href="<?php echo base_url('admin/himpunan/tambah') ?>"><i class="fa fa-plus"></i> Tambah Himpunan</a>