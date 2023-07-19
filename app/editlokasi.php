<!-- Add the Bootstrap 4 CSS link in your HTML if you haven't already -->
<!-- ... -->
<?php
$id_lokasi  = $_GET['id_lokasi'];
$query = mysqli_query($koneksi, "SELECT * from t_lokasi where id_lokasi='$id_lokasi'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
  <div class="container-fluid">
    <form method="get" action="edit/update-lokasi.php">
      <div class="modal-body">
        <div class="container">
          <!-- <h4>Edit Data Aset</h4> -->
          <div class="row g-3">
            <div class="col-sm-6 mt-2">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama lokasi</label>
                <input type="text" class="form-control" name="id_lokasi" value="<?php echo $view['id_lokasi'] ?>" hidden>
                <input type="text" class="form-control" name="nama_lokasi" value="<?php echo $view['nama_lokasi'] ?>">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer justify-content-start">
          <button type="button" class="btn btn-danger mt-0" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary " name="proses">Simpan</button>
      </div>
    </form>
  </div>
</section>




