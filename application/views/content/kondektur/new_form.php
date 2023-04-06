<h3>Tambah Data Kondektur</h3>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="<?= base_url('kondektur/saveDataKondektur') ?>" method="POST">
  
    <div class="form-group">
		<label for="nama_kondektur">Nama Kondektur</label>
		<input class="form-control <?php echo form_error('nama_kondektur') ? 'is-invalid':'' ?>"
			type="text" name="nama_kondektur" placeholder="nama Kondektur" />
		<div class="invalid-feedback">
			<?php echo form_error('nama_kondektur') ?>
		</div>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>