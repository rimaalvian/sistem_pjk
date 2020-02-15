<h3>Hasil Pengecekan</h3>
<hr>
<h4>Data Cek Anda</h4>
<table class="table">
	<?php foreach ($hasil['inputan'] as $index => $data): ?>
		<tr>
			<td style="width: 20%"><?php echo $data['nama_variabel']; ?></td>
			<td style="width: 1%">:</td>
			<td>
				<?php if ($data['data_cek']==0){
					echo "Tidak";
				}elseif($data['data_cek']==1){
					echo "Ya";
				}else{
					echo $data['data_cek'];
				}
			?></td>
		</tr>
	<?php endforeach ?>
</table>
<hr>
<h4>Persentase Risiko Anda</h4>
<strong><?php echo $hasil['defuzzifikasi'] ?></strong>
<hr>
<h4>Keterangan Risiko Anda</h4>
<strong><?php echo $hasil['resiko'] ?></strong>
<hr>
<h4>Saran</h4>
<?php foreach ($saran as $key => $value): ?>
	<li><?php echo $value['nama_saran'] ?></li>
<?php endforeach ?>