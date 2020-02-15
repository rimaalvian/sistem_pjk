<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css.css") ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/font-awesome-4.7.0/css/font-awesome.css") ?>">
</head>
<body>
	<div class="container" style="margin-left: 475px; margin-top: 150px;">
		<div class="row justify-content-center">
			<div class="col-lg-4">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h4>Login Admin</h4>
								</div>
								<form class="user" method="post">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
									</div>
									<button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
								</form>
							</div>
							<?php if ($this->session->flashdata('Gagal')): ?>
								<div class="alert alert-danger"><?php echo $this->session->flashdata('Gagal'); ?>
								</div>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>