<h3>Daftar Faktor Risiko</h3>
<hr>
<div class="table-responsive">
	<table class="table table-condensed table-hover table-striped" id="thetable">
		<thead>
			<tr>
				<td width="5%">Nomor</td>
				<td>Nama</td>
				<td width="30%">Opsi</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($variabel as $index => $data): ?>
				<tr>
					<td><?php echo $index+1 ?></td>
					<td><?php echo $data['nama_variabel'] ?></td>
					<td>
						<a href="<?php echo base_url("admin/variabel/ubah/".$data['id_variabel']) ?>"><i class="fa fa-edit"></i> Edit</a>
						<a href="<?php echo base_url("admin/variabel/hapus/".$data['id_variabel']) ?>" onclick="return confirm('Apakah Anda Akan Menghapus Faktor Risiko Ini?')"><i class="fa fa-trash"></i> Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<a class="btn btn-primary" href="<?php echo base_url('admin/variabel/tambah') ?>"><i class="fa fa-plus"></i> Tambah Faktor Risiko</a>