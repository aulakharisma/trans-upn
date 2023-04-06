<h3>Ubah Data Bus</h3>
<a href="<?php echo site_url('bus/') ?>"><i class="fas fa-arrow-left"></i>Back</a>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="" method="POST" enctype="multipart/form-data">
    <!-- atribut action dikosongkan, artinya action-nya akan diproses oleh controller tempat view ini digunakan. yaitu driver/editDataDriver/ID -->
    <input type="hidden" name="id" value="<?php echo $bus->id_bus?>" />

    <div class="form-group">
		<label for="plat">Plat</label>
		<input class="form-control <?php echo form_error('plat') ? 'is-invalid':'' ?>" type="text" name="plat" placeholder="plat bus" value="<?= $bus->plat ?>"/>
		<div class="invalid-feedback">
			<?php echo form_error('plat') ?>
		</div>
	</div>
    <div class="form-group">
		<label for="status">Status</label>
		<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>" type="text" name="status" placeholder="status" value="<?= $bus->status ?>"/>
		<div class="invalid-feedback">
			<?php echo form_error('status') ?>
		</div>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>