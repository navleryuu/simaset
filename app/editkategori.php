<!-- Add the Bootstrap 4 CSS link in your HTML if you haven't already -->
<!-- ... -->
<?php
$id_kategori  = $_GET['id_kategori'];
$query = mysqli_query($koneksi, "SELECT * from t_kategori where id_kategori='$id_kategori'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
  <div class="container-fluid">
    <form method="get" action="edit/update-kategori.php">
      <div class="modal-body">
        <div class="container">
          <!-- <h4>Edit Data Aset</h4> -->
          <div class="row g-3">
            <div class="col-sm-6 mt-2">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Kategori</label>
                <input type="text" class="form-control" name="id_kategori" value="<?php echo $view['id_kategori'] ?>" hidden>
                <input type="text" class="form-control" name="nama_kategori" value="<?php echo $view['nama_kategori'] ?>">
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




