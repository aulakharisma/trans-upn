<form action="<?= base_url('kondektur/hitungGaji') ?>" method="POST">
  
    <div class="form-group">
		<label for="jumlah_km">Nama Kondektur</label>
		<select name="jumlah_km" class="form-control">
			<option value="">----- PILIH KONDEKTUR -----</option>
			<?php foreach ($trans_upn as $key => $value) { ?>
				<option value="<?= $value->jumlah_km ?>"> <?= $value->nama_kondektur ?> </option>
			<?php } ?>
		</select>
	</div>

    <div class="form-group">
		<label for="id_kondektur">Pilih tanggal</label>
		<select name="id_kondektur" class="form-control">
			<option value="">----- PILIH TANGGAL -----</option>
			<?php foreach ($trans_upn as $key => $value) { ?>
				<option value="<?= $value->id_kondektur ?>"> <?= $value->tanggal ?> </option>
			<?php } ?>
		</select>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Hitung Gaji"/>
</form>