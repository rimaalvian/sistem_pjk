	<!-- Modal Login-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post" action="<?php echo base_url("client/login") ?>">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Silahkan Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="container">
						<?php echo $this->session->flashdata('Gagal'); ?>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class=" modal-footer">
						<button class="btn btn-primary btn-block" type="submit">Login</button>
					</div>
					<div style="padding-bottom: 15px" class="text-center">
						<a class="small" href="<?php echo base_url("client/daftar") ?>">Daftar Akun</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal Daftar-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
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
				<div class="container">
					<?php echo $this->session->flashdata('Gagal'); ?>
				</div>
			</div>
		</div>
	</div>
	<footer style="padding: 20px 20px 20px 20px; background: #222; color: #fff;">
		<div class="text-center">
			Copyright &copy; Rima Alviani 2019
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<?php if ($this->session->flashdata('Gagal')): ?>
		<script>
			$('#exampleModal').modal('show');
		</script>
		<?php endif ?>