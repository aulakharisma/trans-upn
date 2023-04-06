<h3>Ubah Data Kondektur</h3>
<a href="<?php echo site_url('kondektur/') ?>"><i class="fas fa-arrow-left"></i>Back</a>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="" method="POST" enctype="multipart/form-data">
    <!-- atribut action dikosongkan, artinya action-nya akan diproses oleh controller tempat view ini digunakan. yaitu driver/editDataDriver/ID -->
    <input type="hidden" name="id" value="<?php echo $kondektur->id_kondektur?>" />

    <div class="form-group">
		<label for="nama_kondektur">Nama Kondektur</label>
		<input class="form-control <?php echo form_error('nama_kondektur') ? 'is-invalid':'' ?>" type="text" name="nama_kondektur" placeholder="nama kondektur" value="<?= $kondektur->nama_kondektur ?>"/>
		<div class="invalid-feedback">
			<?php echo form_error('nama_kondektur') ?>
		</div>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>