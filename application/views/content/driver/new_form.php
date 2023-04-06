<h3>Tambah Data Driver</h3>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="<?= base_url('driver/saveDataDriver') ?>" method="POST">
  
    <div class="form-group">
		<label for="nama_driver">Nama Driver</label>
		<input class="form-control <?php echo form_error('nama_driver') ? 'is-invalid':'' ?>"
			type="text" name="nama_driver" placeholder="nama driver" />
		<div class="invalid-feedback">
			<?php echo form_error('nama_driver') ?>
		</div>
	</div>

    <div class="form-group">
		<label for="no_sim">No SIM</label>
		<input class="form-control <?php echo form_error('no_sim') ? 'is-invalid':'' ?>"
			type="number" name="no_sim" placeholder="No SIM" />
		<div class="invalid-feedback">
			<?php echo form_error('no_sim') ?>
		</div>
	</div>

    <div class="form-group">
		<label for="alamat">Alamat</label>
		<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
			type="text" name="alamat" placeholder="Alamat" />
		<div class="invalid-feedback">
			<?php echo form_error('alamat') ?>
		</div>
	</div>
  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>