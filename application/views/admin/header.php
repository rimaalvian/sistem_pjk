<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $title ; ?></title>

	<link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/font-awesome-4.7.0/css/font-awesome.css") ?>">

</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Sistem Deteksi Risiko Penyakit Jantung Koroner</a>
			</div>
		</nav>
		<nav class="navbar-default navbar-side">
			<div class="sidebar-collapse collapse">
				<div class="user">
					<!-- <img src="<?php echo base_url("assets/img/user.png") ?>"> -->
					<h3 style="color: white"><?php echo nama_session_admin() ?></h3>
					<p style="color: white">Administrator</p>
				</div>
				<ul class="nav" id="main-menu">
					<li><a href="<?php echo base_url("admin") ?>"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="<?php echo base_url("admin/profil") ?>"><i class="fa fa-user"></i> Profil</a></li>
					<li><a href="<?php echo base_url("admin/client") ?>"><i class="fa fa-users"></i> Member</a></li>
					<li><a href="<?php echo base_url("admin/aturan") ?>"><i class="fa fa-file"></i> Aturan</a></li>
					<li><a href="<?php echo base_url("admin/variabel") ?>"><i class="fa fa-book"></i> Faktor Risiko</a></li>
					<li><a href="<?php echo base_url("admin/himpunan") ?>"><i class="fa fa-list"></i> Himpunan</a></li>
					<li><a href="<?php echo base_url("admin/saran") ?>"><i class="fa fa-comment"></i> Saran</a></li>
					<li><a href="<?php echo base_url("admin/artikel") ?>"><i class="fa fa-pencil"></i> Artikel</a></li>
					<li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" href="<?php echo base_url("admin/login/logout") ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<div id="page-wrapper">
			<div id="page-inner">
