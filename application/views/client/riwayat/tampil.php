<h3>Riwayat</h3>
<hr>
<table class="table table-condensed table-responsive" id="thetable">
	<thead>
		<tr>
			<th>Tanggal</th>
			<th>Lihat</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($riwayat as $index => $data): ?>		
			<tr>
				<td><?php echo $index+1 ?></td>
				<td><?php echo tanggal_indonesia($data['tanggal_riwayat']); ?></td>
				<td>
					<a href="<?php echo base_url("client/riwayat/detail/".$data['id_riwayat']) ?>"><i class="fa fa-info"></i> Detail</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<div>
	<a class="btn btn-primary" href="<?php echo base_url("client/riwayat/grafik") ?>">Lihat Grafik</a>
</div>