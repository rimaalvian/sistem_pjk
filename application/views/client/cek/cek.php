<h3>Cek Risiko</h3>
<hr>
<div class="row">
	<div class="col-md-5">
		
		<form method="post">
			<?php foreach ($variabel as $index => $data): ?>
				<?php
				if ($data['id_variabel']=="1") {
					$label = "Tahun";
				}elseif ($data['id_variabel']=="2") {
					$label = "mmHg";
				}elseif ($data['id_variabel']=="3") {
					$label = "mg/dL";
				}elseif ($data['id_variabel']=="4") {
					$label = "mg/dL";
				}else{
					$label = "";
				}
				?>
				<div class="form-group">
					<label><?php echo $data['nama_variabel'] ?></label>
					<div class="input-group">						
						<?php if ($data['status_himpunan_variabel']=="sembunyikan"): ?>				
							<input class="form-control" type="text" name="id_variabel[<?php echo $data['id_variabel']; ?>]" value ="<?php if($data['nama_variabel']=="IMT"){echo $imt;} ?>" required>
							<span class="input-group-addon"><?php echo $label; ?></span>
							<?php else: ?>
								<br>
								<?php foreach ($himpunan[$data['id_variabel']] as $key => $value): ?>
									<input type="radio" name="id_variabel[<?php echo $data['id_variabel'] ?>]" value="<?php if($value['nama_himpunan']=="Ya"){echo "1";} else {echo "0";} ?>"> <?php echo $value['nama_himpunan'] ?>
								<?php endforeach ?>
							<?php endif ?>
						</div>
					</div>
				<?php endforeach ?>
				<button class="btn btn-primary">Cek Risiko</button>
			</form>
		</div>
	</div>