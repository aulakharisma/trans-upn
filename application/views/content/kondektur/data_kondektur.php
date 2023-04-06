<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= base_url('kondektur/addDataKondektur') ?>" class="btn btn-primary"><i class="fas fa-plus pr-2"></i>Add <?= $title ?></a>
              </div>
              <!-- card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID Kondektur</th>
                    <th>Nama Kondektur</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                <?php foreach($kondektur as $kond) : ?>
                  <tr>
                    <td> <?= $kond->id_kondektur; ?> </td>
                    <td> <?= $kond->nama_kondektur; ?> </td>
                    <td>
                      <center>
                        <a href="<?php echo site_url('kondektur/editDataKondektur/'.$kond->id_kondektur) ?>"class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											  <a onclick="deleteConfirm('<?php echo site_url('kondektur/deleteDataKondektur/'.$kond->id_kondektur) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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