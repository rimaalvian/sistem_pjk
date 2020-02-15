<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Sistem PJK</title>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="container mb-5">
		<h3 class="text-center m-5">Artikel Kesehatan</h3>
		<div class="row justify-content-md-center">	
			<div class="col-sm-8">
				<?php foreach ($artikel as $key => $value): ?>
					<div class="row mb-4">
						<div class="col-sm-5">
							<img src="<?php echo base_url("assets/".$value['gambar_artikel']) ?>" class="img-fluid">
						</div>
						<div class="col-sm-7">
							<p class="lead"><?php echo $value['judul_artikel'] ?></p>
							<p><?php echo substr(($value['isi_artikel']), 0, 150)?>
							</p>
							<a href="<?php echo base_url("artikel/detail/".$value['url_artikel']) ?>">Baca Selengkapnya</a>
						</div>
					</div>
				<?php endforeach ?>
			</div>	
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>