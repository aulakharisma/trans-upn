<h3>Tambah Data Utama</h3>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="<?= base_url('dashboard/saveDataUtama') ?>" method="POST">
  
    <div class="form-group">
		<label for="id_kondetur">Nama Kondektur</label>
		<select name="id_kondektur" class="form-control <?php echo form_error('nama_kondektur') ? 'is-invalid':'' ?>">
			<option value="">----- PILIH KONDEKTUR -----</option>
			<?php foreach ($kondektur as $key => $value) { ?>
				<option value="<?= $value->id_kondektur ?>"> <?= $value->nama_kondektur ?> </option>
			<?php } ?>
			<div class="invalid-feedback">
				<?php echo form_error('nama_kondektur') ?>
			</div>
		</select>
	</div>

    <div class="form-group">
		<label for="id_kondetur">Nama Driver</label>
		<select name="id_kondektur" class="form-control <?php echo form_error('nama_driver') ? 'is-invalid':'' ?>">
			<option value="">----- PILIH DRIVER -----</option>
			<?php foreach ($driver as $key => $value) { ?>
				<option value="<?= $value->id_driver ?>"> <?= $value->nama_driver ?> </option>
			<?php } ?>
			<div class="invalid-feedback">
				<?php echo form_error('nama_driver') ?>
			</div>
		</select>
	</div>

    <div class="form-group">
		<label for="id_kondetur">Plat Bus</label>
		<select name="id_kondektur" class="form-control <?php echo form_error('plat') ? 'is-invalid':'' ?>">
			<option value="">----- PILIH BUS -----</option>
			<?php foreach ($bus as $key => $value) { ?>
				<option value="<?= $value->id_bus ?>"> <?= $value->plat ?> </option>
			<?php } ?>
			<div class="invalid-feedback">
				<?php echo form_error('plat') ?>
			</div>
		</select>
	</div>

    <div class="form-group">
		<label for="status">Jumlah KM</label>
		<input class="form-control <?php echo form_error('jumlah_km') ? 'is-invalid':'' ?>"
			type="number" name="jumlah_km" placeholder="Jumlah KM" />
		<div class="invalid-feedback">
			<?php echo form_error('jumlah_km') ?>
		</div>
	</div>

	<div class="form-group">
		<label for="taggal">Tanggal</label>
		<div class="input-group date" data-provide="datepicker">
			<input type="date" class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>">
			<div class="invalid-feedback">
				<?php echo form_error('tanggal') ?>
			</div>
		</div>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>