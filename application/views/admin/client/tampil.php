<h3>Daftar client</h3>
<hr>
<div class="table-responsive">
	<table class="table table-condensed table-hover table-striped" id="thetable">
		<thead>
			<tr>
				<th>Nomor</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($client as $index => $data): ?>
				<tr>
					<td><?php echo $index+1 ?></td>
					<td><?php echo $data['nama_client'] ?></td>
					<td><?php echo $data['jenis_kelamin_client'] ?></td>
					<td><?php echo $data['email_client'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>