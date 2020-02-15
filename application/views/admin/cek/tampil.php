<h3>Data Cek</h3>
<hr>
<div class="table-responsive">
	<table class="table table-bordered table-condensed table-hover table-striped">
		<thead>
			<tr>
				<th>Nomor</th>
				<th>Nama Member</th>
				<th>Tanggal Cek</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cek as $index => $data): ?>
				<tr>
					<td><?php echo $index+1 ?></td>
					<td><?php echo $data['nama_member'] ?></td>
					<td><?php echo $data['tanggal_cek'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>