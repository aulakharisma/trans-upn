<h3>Tambah Data Bus</h3>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="<?= base_url('bus/saveDataBus') ?>" method="POST">
  
    <div class="form-group">
		<label for="plat">Plat</label>
		<input class="form-control <?php echo form_error('plat') ? 'is-invalid':'' ?>"
			type="text" name="plat" placeholder="plat Bus" />
		<div class="invalid-feedback">
			<?php echo form_error('plat') ?>
		</div>
	</div>

    <div class="form-group">
		<label for="status">Status</label>
		<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
			type="text" name="status" placeholder="status" />
		<div class="invalid-feedback">
			<?php echo form_error('status') ?>
		</div>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>