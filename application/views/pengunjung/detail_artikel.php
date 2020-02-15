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

		<div class="row justify-content-md-center">	
			<div class="col-sm-8">
				<h3 class="text-center mt-5"><?php echo $artikel['judul_artikel'] ?></h3>
				<p class="text-center">
					<small><i>Ditulis pada <?php echo tanggal_indonesia($artikel['tanggal_artikel']) ?></i></small>
				</p>
				<img src="<?php echo base_url("assets/".$artikel['gambar_artikel']) ?>" class="img-fluid mb-5">
				<p><?php echo $artikel['isi_artikel'] ?></p>
			</div>	
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>