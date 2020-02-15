<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registrasi</title>

	<link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/font-awesome-4.7.0/css/font-awesome.css") ?>">
</head>
<body>
	<div class="container">
		<h3>Registrasi</h3>
		<hr>
		<form method="post">
			<div class="form-group">
				<label>Nama</label>
				<input style="width: 40%" class="form-control" type="text" name="nama_client" placeholder="Masukkan nama Anda" required>
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input style="width: 40%" class="form-control" type="date" name="tanggal_lahir_client" placeholder="Masukkan tanggal lahir Anda" required>
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<br>
				<input type="radio" name="jenis_kelamin_client" value="Pria"> <i class="fa fa-mars" aria-hidden="true" required></i> Pria
				<br>
				<input type="radio" name="jenis_kelamin_client" value="Wanita"> <i class="fa fa-venus" aria-hidden="true" required></i> Wanita <br>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input style="width: 40%" class="form-control" type="email" name="email_client" placeholder="Masukkan email Anda" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input style="width: 40%" class="form-control" type="password" name="password" placeholder="Buat password" required>
			</div>
			<div class="form-group">
				<label>Konfirmasi Password</label>
				<input style="width: 40%" class="form-control" type="password" name="password_konfirmasi" placeholder="Konfirmasi password" required>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Daftar</button>
				<a class="btn btn-primary" href="<?php echo base_url("client/login") ?>">Batal</a>
			</div>
		</form>
	</div>
</body>
</html>