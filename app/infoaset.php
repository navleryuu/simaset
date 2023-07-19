<?php
include ('../conf/config.php');

if (isset($_POST['btnTampil'])) {
  $tglAwal = $_POST['TglAwal'];
  $tglAkhir = $_POST['TglAkhir'];

  // Use prepared statements to prevent SQL injection
  $stmt = mysqli_prepare($koneksi, "SELECT * FROM t_aset WHERE tanggal BETWEEN ? AND ?");
  mysqli_stmt_bind_param($stmt, "ss", $tglAwal, $tglAkhir);
  mysqli_stmt_execute($stmt);
  $aset = mysqli_stmt_get_result($stmt);

  // Check if any rows are returned
  if (mysqli_num_rows($aset) > 0) {
    // Process and display the results here
  } else {
    echo "<script>alert('Data tidak ditemukan');</script>";
  }
}
?>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Info Data Aset</h3>
              </div>
              <br></br>
              <form action="<?php [''];?>" method="POST" name="form10" target="">
              <div class="row">
                <div class="col-lg-3 ml-4">
                  <input name= "TglAwal"type="date" class="form-control" value="<?php echo $awalTgl;?>" size="10">
                </div>
                <div class="col-lg-3">
                  <input name= "TglAkhir"type="date" class="form-control" value="<?php echo $akhirTgl;?>" size="10">
                </div>
                <div class="col-lg-3">
                  <input name= "btnTampil"type="submit" class="btn btn-success" value="Tampilkan">
                </div>
              </div>
              </form>
             
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-lg-3">
                  <a href="cetak.php" class="btn btn-primary mb-3">Cetak</a>
                </div>
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
                    <th>Status</th>
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
        <td><a href="index.php?page=infoaset" class="btn btn-sm btn-success">Disetujui</a></td>
        
    

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

      
  
