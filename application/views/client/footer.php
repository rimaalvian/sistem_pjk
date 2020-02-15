			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Silahkan Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary" type="submit">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Apakah Anda ingin menutup sesi ini, <strong><?php echo nama_session_client() ?></strong>?</div>
				<div class="modal-footer">
					<a class="btn btn-primary" href="<?php echo base_url("client/login/logout"); ?>">Ya</a>
					<button class="btn btn-secondary" type="button" data-dismiss="modal" id="xyz">Tidak</button>
				</div>
			</div>
		</div>
	</div>
	<footer style="padding: 20px 20px 20px 20px; background: #808080; color: #fff;">
		<div class="text-center">
			Copyright &copy; Rima Alviani 2019
		</div>
	</footer>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url("assets/ckeditor/ckeditor.js") ?>"></script>
	<script>
		$(document).ready(function() {
			$('#thetable').DataTable();
		} );
	</script>
	<script>
		CKEDITOR.replace("theeditor");
	</script>
	<script src="<?php echo base_url("assets/js/js.js") ?>"></script>
	<script>
		$(document).ready(function(){
			$("#xyz").on("click", function(){
				location.reload();
			})
		})
	</script>
</body>
</html>