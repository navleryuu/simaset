
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan Data Aset</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama Aset</th>
                    <th>Merk</th>
                    <th>Jumlah</th>
                    <th>Nama Kategori</th>
                    <th>Lokasi</th>
                    <th>Jenis</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th colspan='2'>Action</th>
                  </tr>
                  </thead>
                  <tbody>

  <tr>
  <?php 
    $no = 0;
    $query = mysqli_query($koneksi, "SELECT a.*, k.nama_kategori, l.nama_lokasi FROM t_aset a
    INNER JOIN t_kategori k ON a.id_kategori = k.id_kategori
    INNER JOIN t_lokasi l ON a.id_lokasi = l.id_lokasi");
    
    while($aset = mysqli_fetch_array($query)){
        $no++;


?>

    <tr>
        <td width='5%'><?php echo $no; ?></td>
        <td><?php echo $aset[1]; ?></td>
        <td><?php echo $aset[2]; ?></td>
        <td><?php echo $aset[3]; ?></td>
        <td><?php echo $aset['nama_kategori']; ?></td>
        <td><?php echo $aset['nama_lokasi']; ?></td>
        <td><?php echo $aset[6]; ?></td>
        <td><?php echo $aset[7]; ?></td>
        <td><?php echo $aset[8]; ?></td>
        <td><a href="index.php?page=laporanaset" class="btn btn-sm btn-success">Setuju</a></td>
        <td><a href="index.php?page=laporanaset" class="btn btn-sm btn-danger">Tolak</a></td>

    </tr>
<?php  } ?>

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
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      
  
