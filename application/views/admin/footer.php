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
				<div class="modal-body">Apakah Anda ingin menutup sesi ini, <strong><?php echo nama_session_admin() ?></strong>?</div>
				<div class="modal-footer">
					<a class="btn btn-primary" href="<?php echo base_url("admin/login/logout"); ?>">Ya</a>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script>
		$('.trash').click(function(){
			var id=$(this).data('id');
			$('#modalDelete').attr('href');
		})
	</script>
	<script>
		$(document).ready(function() {
			$('#thetable').DataTable();
		} );</script>
		<script src="<?php echo base_url("assets/ckeditor/ckeditor.js") ?>"></script>
		<script>
			CKEDITOR.replace("theeditor");
		</script>
		<script src="<?php echo base_url("assets/js/js.js") ?>"></script>
	</body>
	</html>