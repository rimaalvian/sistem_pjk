<!DOCTYPE html>
<html>
<head>
	<title>HASIL PENGECEKAN</title>
	<style type="text/css">
		th, td{
			text-align: left;
		}
	</style>
</head>
<body>
	<h2>Data Anda</h2>
	<hr>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $riwayat['nama_client'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo tanggal_indonesia($riwayat['tanggal_lahir_client']) ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $riwayat['jenis_kelamin_client'] ?></td>
		</tr>
	</table>
	<h2>Data Cek</h2>
	<hr>
	<table>
		<tr>
			<td>Tanggal Cek</td>
			<td>:</td>
			<td><?php echo tanggal_indonesia($riwayat['tanggal_riwayat']); ?></td>
		</tr>
		<?php foreach ($cek as $key => $value): ?>
			<tr>
				<td><?php echo $value['nama_variabel'] ?></td>
				<td>:</td>
				<td><?php echo $value['data_cek'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
	<h2>Hasil</h2>
	<hr>
	<table>
		<tr>
			<td>Risiko</td>
			<td>:</td>
			<td><?php echo $riwayat['hasil'] ?>%</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td><?php echo $riwayat['nama_resiko'] ?></td>
		</tr>
	</table>
	<script type="text/javascript">
		print();
	</script>
</body>
</html>