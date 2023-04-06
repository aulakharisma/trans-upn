<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= base_url('dashboard/addDataUtama') ?>" class="btn btn-primary"><i class="fas fa-plus pr-2"></i>Add <?= $title ?></a>
              </div>
              <!-- card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID Table</th>
                    <th>Nama Driver</th>
                    <th>Nama Kondektur</th>
                    <th>Plat Bus</th>
                    <th>Jumlah KM</th>
                    <th>tanggal</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                <?php foreach($trans_upn as $key => $value) : ?>
                  <tr>
                    <td> <?= $value->id_trans_upn; ?> </td>
                    <td> <?= $value->nama_driver; ?> </td>
                    <td> <?= $value->nama_kondektur; ?> </td>
                    <td> <?= $value->plat; ?> </td>
                    <td> <?= $value->jumlah_km; ?> </td>
                    <td> <?= $value->tanggal; ?> </td>
                    <td>
                      <center>
                        <a href="<?php echo site_url('dashboard/editDataUtama/'.$value->id_trans_upn) ?>"class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
						            <a onclick="deleteConfirm('<?php echo site_url('dashboard/deleteDataUtama/'.$value->id_trans_upn) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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