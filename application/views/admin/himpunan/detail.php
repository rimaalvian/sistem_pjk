<h3>Detail Himpunan</h3>
<hr>
<table class="table">
	<tr>
		<th width="15%">Faktor Resiko</th>
		<th width="1%">:</th>
		<th><?php echo $himpunan['nama_variabel'] ?></th>
	</tr>
	<tr>
		<th>Himpunan</th>
		<th>:</th>
		<th><?php echo $himpunan['nama_himpunan'] ?></th>
	</tr>
	<tr>
		<th>Batas Bawah</th>
		<th>:</th>
		<th><?php echo $himpunan['batas_bawah_himpunan'] ?></th>
	</tr>
	<tr>
		<th>Batas Tengah 1</th>
		<th>:</th>
		<th><?php echo $himpunan['batas_tengah_1_himpunan'] ?></th>
	</tr>
	<tr>
		<th>Batas Tengah 2</th>
		<th>:</th>
		<th><?php echo $himpunan['batas_tengah_2_himpunan'] ?></th>
	</tr>
	<tr>
		<th>Batas Atas</th>
		<th>:</th>
		<th><?php echo $himpunan['batas_atas_himpunan'] ?></th>
	</tr>
</table>
<a class="btn btn-primary" href="<?php echo base_url('admin/himpunan') ?>">Kembali</a>