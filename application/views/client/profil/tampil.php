<h3>Profil Anda</h3>
<hr>

<table class="table">
	<tr>
		<th style="width:20%;">Nama</th>
		<th style="width:1%;">:</th>
		<th><?php echo $client['nama_client']; ?></th>
	</tr>
	<tr>
		<th style="width:10%;">Tanggal Lahir</th>
		<th style="width:1%;">:</th>
		<th><?php echo tanggal_indonesia($client['tanggal_lahir_client']); ?></th>
	</tr>
	<tr>
		<th style="width:10%;">Jenis Kelamin</th>
		<th style="width:1%;">:</th>
		<th><?php echo $client['jenis_kelamin_client']; ?></th>
	</tr>
	<tr>
		<th style="width:10%;">Email</th>
		<th style="width:1%;">:</th>
		<th><?php echo $client['email_client']; ?></th>
	</tr>
</table>
<div class="form-group">
	<a class="btn btn-primary" href="<?php echo base_url("client/profil/ubah_profil/".$client['id_client']) ?>">Edit Profil</a>
	<a class="btn btn-primary" href="<?php echo base_url("client/profil/ubah_password/".$client['id_client']) ?>">Edit Password</a>
</div>