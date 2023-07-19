  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <!-- /.card -->
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">Data Aset</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
              <div class="d-flex justify-content-between mb-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <form class="form-inline" role="search" action="cari.php" method = "GET">
                  <input class="form-control mr-2" type="text" placeholder="Search" aria-label="Search" name="search" id="searchInput" >
                  <button class="btn btn-primary" type="submit" name="cari" id="searchButton">Search</button>
                </form>
              </div>
            </div>

                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                  <tr class="text-center">
                                      <th>No</th>
                                      <th>Nama Aset</th>
                                      <th>Merk</th>
                                      <th>Jumlah</th>
                                      <th>Kategori</th>
                                      <th>Lokasi</th>
                                      <th>Jenis</th>
                                      <th>Kondisi</th>
                                      <th>Keterangan</th>
                                      <th colspan="2">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php 
                                  $no = 0;
                                  $query = mysqli_query($koneksi, "SELECT a.*, k.nama_kategori, l.nama_lokasi FROM t_aset a
                                  INNER JOIN t_kategori k ON a.id_kategori = k.id_kategori
                                  INNER JOIN t_lokasi l ON a.id_lokasi = l.id_lokasi");
                                  
                                  while($aset = mysqli_fetch_array($query)){
                                      $no++;

                              ?>
                              <tr>
                                  <td width="5%"><?php echo $no; ?></td>
                                  <td><?php echo $aset[1]; ?></td>
                                  <td><?php echo $aset[2]; ?></td>
                                  <td><?php echo $aset[3]; ?></td>
                                  <td><?php echo $aset['nama_kategori']; ?></td>
                                  <td><?php echo $aset['nama_lokasi']; ?></td>
                                  <td><?php echo $aset[6]; ?></td>
                                  <td><?php echo $aset[7]; ?></td>
                                  <td><?php echo $aset[8]; ?></td>
                                  <td><a href="delete/hapus_data.php?id= <?php echo $aset['id_aset'] ?>" class="btn btn-sm btn-danger">Hapus</a></td>
                                  <td><a href="index.php?page=editdata&& id_aset=<?php echo $aset['id_aset'] ?>" class="btn btn-sm btn-success">Edit</a></td></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <!-- /.content -->
    <div class="modal fade" id="modal-lg" width="200px">
        <div class="modal-dialog modal-lg" >
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data Aset</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah-data.php">
            <div class="modal-body">
            <div class="row g-3">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Aset</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Aset" name="nama_aset">
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Merk</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Merk" name="merk">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jumlah</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jumlah" name="jumlah">
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Kategori</label>
                <select class="custom-select" name="id_kategori">
                  <option>---</option>
                  <?php
                    include "config.php";
                    $query = mysqli_query($koneksi, "Select * FROM t_kategori") or die (mysqli_error($koneksi));
                    while($data = mysqli_fetch_array($query)){
                      echo "<option value=$data[id_kategori]> $data[nama_kategori]</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Lokasi</label>
                <select class="custom-select" name="id_lokasi">
                  <Option>---</Option require>
                <?php
                    include "config.php";
                    $query = mysqli_query($koneksi, "Select * FROM t_lokasi") or die (mysqli_error($koneksi));
                    while($data = mysqli_fetch_array($query)){
                      echo "<option value=$data[id_lokasi]> $data[nama_lokasi]</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Jenis</label>
                <select class="custom-select" name="jenis">
                <option>---</option>
                  <option>Tetap</option>
                  <option>Bergerak</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Pilih Kondisi</label>
                <select class="custom-select" name="kondisi">
                <option>---</option>
                  <option>Baik</option>
                  <option>Rusak ringan</option>
                  <option>Rusak berat</option>
                  <option>Perlu diganti</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Keterangan" name="keterangan">
          </div>
        </div>
      </div>

            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
            </div>
          </div>    
    </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
   </div>

  
   <script>
  // Fungsi yang dipanggil ketika tombol "Search" diklik
  function handleSearch() {
    // Ambil nilai masukan dari elemen input
    var searchQuery = document.getElementById("searchInput").value;

    // Lakukan operasi pencarian (misalnya, mencari dalam daftar data)
    // Contoh implementasi pencarian sederhana
    var data = ["item1", "item2", "item3", "item4"];
    var searchResult = data.filter(item => item.includes(searchQuery));

    // Tampilkan hasil pencarian (misalnya, dengan console.log)
    console.log("Hasil Pencarian:", searchResult);
  }

  // Tambahkan event listener untuk tombol "Search"
  var searchButton = document.getElementById("searchButton");
  searchButton.addEventListener("click", handleSearch);
</script>
   <!-- <script>
    function btnEdit(id){
      document.getElementById('id_asset').value = id;
    }
   </script> -->