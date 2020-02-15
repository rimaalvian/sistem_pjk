<h3>Selamat Datang, <strong><?php echo nama_session_client() ?></strong>!</h3>
<br>
<h5>Apakah Anda akan melakukan pengecekan hari ini?</h5>
<a class="btn btn-success" href="<?php echo base_url("client/cek/tambah") ?>">Ya</a>
<a class="btn btn-danger" href="<?php echo base_url("client/Welcome/index_tidak") ?>">Tidak</a>