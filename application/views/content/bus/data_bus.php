<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= base_url('bus/addDataBus') ?>" class="btn btn-primary"><i class="fas fa-plus pr-2"></i>Add <?= $title ?></a>
              </div>

              <!-- card-header -->
              <div class="card-body">
                <form action="<?= base_url('bus') ?>" method="GET">
                    <select class="form-control" name="status" id="status_bus" required>
                        <option value="">Pilih</option>
                        <option value="1" <?= isset($_GET['status']) && $_GET['status'] == 1 ? 'selected' : '' ?> >Active</option>
                        <option value="2" <?= isset($_GET['status']) && $_GET['status'] == 2 ? 'selected' : '' ?>>Cadangan</option>
                        <option value="0" <?= isset($_GET['status']) && $_GET['status'] == 0 ? 'selected' : '' ?>>Rusak</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Filter</button>
                    <a href="<?= base_url('index.php/Bus') ?>"><button type="button"  class="btn btn-danger">Reset</button></a>
                </form>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID Bus</th>
                    <th>Plat Bus</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                <?php foreach($bus as $b) : ?>
                  <tr>
                    <td> <?= $b->id_bus; ?> </td>
                    <td> <?= $b->plat; ?> </td>
                    <?php if ($b->status == 1) { ?>
                      <td style="background-color : green"> <?= $b->status; ?> </td>
                    <?php } ?>
                    <?php if ($b->status == 2) { ?>
                      <td style="background-color : yellow"> <?= $b->status; ?> </td>
                    <?php } ?>
                    <?php if ($b->status == 0) { ?>
                      <td style="background-color : red"> <?= $b->status; ?> </td>
                    <?php } ?>
                    <td>
                      <center>
                        <a href="<?php echo site_url('bus/editDataBus/'.$b->id_bus) ?>"class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											  <a onclick="deleteConfirm('<?php echo site_url('bus/deleteDataBus/'.$b->id_bus) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                      </center>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
      }
    </script>