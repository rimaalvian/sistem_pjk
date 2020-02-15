<h3>Daftar Saran</h3>
<hr>
<div class="table-responsive">
	<table class="table table-condensed table-hover table-striped" id="thetable">
		<thead>
			<tr>
				<th width="5%">Nomor</th>
				<th width="25%">Saran</th>
				<th width="25%">Resiko</th>
				<th width="30%">Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($saran as $index => $data): ?>
				<tr>
					<td><?php echo $index+1 ?></td>
					<td><?php echo $data['nama_saran'] ?></td>
					<td><?php echo $data['nama_resiko'] ?></td>
					<td>
						<a href="<?php echo base_url("admin/saran/ubah/".$data['id_saran']) ?>"><i class="fa fa-edit"></i> Edit</a>
						<a href="<?php echo base_url("admin/saran/hapus/".$data['id_saran']) ?>" onclick="return confirm('Apakah Anda Akan Menghapus Saran Ini?')"><i class="fa fa-trash"></i> Hapus</a>
<!-- 
						<a href="#myModal" class="trash" data-id="1" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i> Hapus</a>
						<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3 id="myModalLabel">Konfirmasi</h3>
									</div>
									<div class="modal-body">
										<p class="error-text"><i class="fa fa-warning modal-icon"></i> Apakah Anda yakin ingin menghapus saran ini?
											<br>Data tidak bisa direstore.</p>
										</div>
										<div class="modal-footer">
											<a href="<?php echo base_url("admin/saran/hapus/".$data['id_saran']) ?>" class="btn btn-danger" id="modalDelete" >Ya</a>
											<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Tidak</button>
										</div>
									</div>
								</div>
							</div> -->
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<a class="btn btn-primary" href="<?php echo base_url("admin/saran/tambah") ?>"><i class="fa fa-plus"></i> Tambah Saran</a>
