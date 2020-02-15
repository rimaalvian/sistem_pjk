
<h3>Detail Riwayat</h3>
<hr>
<h4>Data Cek</h4>
<table class="table table-responsive">
	<?php foreach ($cek as $key => $value): ?>
		<tr>
			<td style="width: 20%"><?php echo $value['nama_variabel'] ?></td>
			<td style="width: 1%">:</td>
			<td><?php 
			if ($value['data_cek']==0){
				echo "Tidak";
			}elseif($value['data_cek']==1){
				echo "Ya";
			}else{
				echo $value['data_cek'];
			}
			?></td>
		</tr>
	<?php endforeach ?>
</table>

<h4>Hasil</h4>
<table class="table table-responsive">
	<tr>
		<th style="width: 10%;">Risiko</th>
		<th style="width: 5%;">:</th>
		<th><?php echo $riwayat['hasil'] ?> %</th>
	</tr>
	<tr>
		<th>Keterangan</th>
		<th>:</th>
		<th><?php echo $riwayat['nama_resiko'] ?></th>
	</tr>
<!-- 	<tr>
		<th>Saran</th>
		<th>:</th>
		<th>
			<a href=""><i class="fa fa-info"></i> Detail Saran</a>
		</th>
	</tr> -->
</table>
<!-- <a class="btn btn-primary" href="<?php echo base_url("client/riwayat/cetak/".$riwayat['id_riwayat']) ?>" target="blank()">Cetak</a> -->
<a class="btn btn-primary" href="<?php echo base_url("client/riwayat/") ?>">Kembali</a>