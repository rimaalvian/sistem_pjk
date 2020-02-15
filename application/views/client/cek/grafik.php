<h3>Grafik Risiko Anda</h3>
<div id="letak_grafik" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
	$(function () {
		Highcharts.chart('letak_grafik', {
			title: {
				text: 'Grafik Hasil Cek Risiko Penyakit Jantung Koroner Anda',
				x: -20
			},
			subtitle: {
				// text: 'Source: WorldClimate.com',
				x: -20
			},
			xAxis: {
				categories: [
				<?php foreach ($riwayat as $key => $value): ?>
					'<?php echo tanggal_indonesia(substr($value['tanggal_riwayat'], 0, 10)); ?>',
				<?php endforeach ?>
				]
			},
			yAxis: {
				title: {
					text: 'Persentase (%)'
				},
				plotLines: [{
					value: 0,
					width: 1,
					color: '#808080'
				}]
			},
			tooltip: {
				valueSuffix: '%'
			},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
			},
			series: [{
				name: 'Resiko',
				data: [
				<?php foreach ($riwayat as $key => $value): ?>
					<?php echo $value['hasil']; ?>,
				<?php endforeach ?>
				]
			}]
		});
	});
</script>