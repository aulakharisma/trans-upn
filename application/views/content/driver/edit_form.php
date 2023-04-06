<h3>Ubah Data Driver</h3>
<a href="<?php echo site_url('driver/') ?>"><i class="fas fa-arrow-left"></i>Back</a>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="" method="POST" enctype="multipart/form-data">
    <!-- atribut action dikosongkan, artinya action-nya akan diproses oleh controller tempat view ini digunakan. yaitu driver/editDataDriver/ID -->
    <input type="hidden" name="id" value="<?php echo $driver->id_driver?>" />

    <div class="form-group">
		<label for="nama_driver">Nama driver</label>
		<input class="form-control <?php echo form_error('nama_driver') ? 'is-invalid':'' ?>" type="text" name="nama_driver" placeholder="nama driver" value="<?= $driver->nama_driver ?>"/>
		<div class="invalid-feedback">
			<?php echo form_error('nama_driver') ?>
		</div>
	</div>

    <div class="form-group">
		<label for="no_sim">No SIM</label>
		<input class="form-control <?php echo form_error('no_sim') ? 'is-invalid':'' ?>"
			type="number" name="no_sim" placeholder="No SIM" value="<?= $driver->no_sim ?>"/>
		<div class="invalid-feedback">
			<?php echo form_error('no_sim') ?>
		</div>
	</div>

    <div class="form-group">
		<label for="alamat">Alamat</label>
		<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
			type="text" name="alamat" placeholder="Alamat" value="<?= $driver->alamat ?>"/>
		<div class="invalid-feedback">
			<?php echo form_error('alamat') ?>
		</div>
	</div>
  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>