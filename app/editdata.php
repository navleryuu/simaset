<!-- Add the Bootstrap 4 CSS link in your HTML if you haven't already -->
<!-- ... -->
<?php
$id_aset  = $_GET['id_aset'];
$query = mysqli_query($koneksi, "SELECT * from t_aset
left join t_lokasi on t_aset.id_lokasi = t_lokasi.id_lokasi
right join t_kategori on t_aset.id_kategori = t_kategori.id_kategori
where id_aset='$id_aset'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
<div class="container-fluid">
<form method="get" action="edit/update-data.php">
  <div class="modal-body">
    <div class="container ">
    <!-- <h4>Edit Data Aset</h4> -->
      <div class="row g-3">
        <div class="col-sm-6  ">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Aset</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Aset" name="id_aset" value="<?php echo $view['id_aset']?>" hidden>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Aset" name="nama_aset" value="<?php echo $view['nama_aset']?>">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Merk</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Merk" name="merk" value="<?php echo $view['merk']?>">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Jumlah</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jumlah" name="jumlah" value="<?php echo $view['jumlah']?>">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Kategori</label>
            <select class="custom-select" name="id_kategori" id="kategori" >
            <option value="<?php echo $view['id_kategori']?>"><?php echo $view['nama_kategori']?></option>
            <?php
              include "../conf/config.php";
              $query = mysqli_query($koneksi, "SELECT id_kategori, nama_kategori FROM t_kategori") or die(mysqli_error($koneksi));
              while ($data = mysqli_fetch_array($query)) {
                echo "<option value='$data[id_kategori]'> $data[nama_kategori]</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Lokasi</label>
            <select class="custom-select" name="id_lokasi">
            <option value="<?php echo $view['id_lokasi']?>"><?php echo $view['nama_lokasi']?></option>
              <?php
              include "config.php";
              $query = mysqli_query($koneksi, "SELECT * FROM t_lokasi") or die(mysqli_error($koneksi));
              while ($data = mysqli_fetch_array($query)) {
                echo "<option value=$data[id_lokasi]> $data[nama_lokasi]</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Jenis</label>
            <select class="custom-select" name="jenis">
              <option value="<?php echo $view['jenis']?>"><?php echo $view['jenis']?></option>
              <option>Tetap</option>
              <option>Bergerak</option>
            </select>
          </div>
        </div>
        <div class="col-sm-3">
              <div class="form-group">
                <label>Pilih Kondisi</label>
                <select class="custom-select" name="kondisi">
                <option value="<?php echo $view['kondisi']?>"><?php echo $view['kondisi']?></option>
                  <option>Baik</option>
                  <option>Rusak ringan</option>
                  <option>Rusak berat</option>
                  <option>Perlu diganti</option>
                </select>
              </div>
            </div>
          </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keterangan" name="keterangan" value="<?php echo $view['keterangan']?>">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-danger mt-0" data-dismiss="modal">Tutup</button>
    <button type="submit" class="btn btn-primary " name="proses">Simpan</button>
  </div>
</form>
      </div>
            </section>



