
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Lokasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-default mb-2 bg-primary" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class=text-center>
                    <th>No</th>
                    <th>Nama Lokasi</th>
                    <th colspan ="2" width ="10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <tfoot>
                  </tfoot>
  <tr>
    <?php 
    $no = 0;
    $query = mysqli_query($koneksi, "SELECT * FROM t_lokasi");
    while($lokasi = mysqli_fetch_array($query)){
      $no++;
    ?>
    <td width='5%'><?php echo $no; ?></td>
    <td><?php echo $lokasi[1]; ?></td>
    <td><a href="delete/hapus_lokasi.php?id= <?php echo $lokasi['id_lokasi'] ?>" class="btn btn-sm btn-danger">Hapus</a></td>
    <td><a href="index.php?page=editlokasi&& id_lokasi=<?php echo $lokasi['id_lokasi'] ?>" class="btn btn-sm btn-success">Edit</a></td></td>

  </tr>
  <?php } ?>
</tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-lg" width="200px">
        <div class="modal-dialog modal-lg" >
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data Lokasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="add/tambah-lokasi.php">
            <div class="modal-body">
            <div class="row g-3">
            
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lokasi</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lokasi" name="nama_lokasi">
                  </div>
                      <!-- select -->
                      
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
            </div>
          </div>
    </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  
