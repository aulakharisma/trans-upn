<form action="<?= base_url('driver/hitungGaji') ?>" method="POST">
  
    <div class="form-group">
		<label for="jumlah_km">Nama Driver</label>
		<select name="jumlah_km" class="form-control">
			<option value="">----- PILIH Driver -----</option>
			<?php foreach ($trans_upn as $key => $value) { ?>
				<option value="<?= $value->jumlah_km ?>"> <?= $value->nama_driver ?> </option>
			<?php } ?>
		</select>
	</div>

    <div class="form-group">
		<label for="id_driver">Pilih tanggal</label>
		<select name="id_driver" class="form-control">
			<option value="">----- PILIH TANGGAL -----</option>
			<?php foreach ($trans_upn as $key => $value) { ?>
				<option value="<?= $value->id_driver ?>"> <?= $value->tanggal ?> </option>
			<?php } ?>
		</select>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Hitung Gaji"/>
</form>