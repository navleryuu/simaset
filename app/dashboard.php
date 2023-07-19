<?php
include('../conf/config.php');



?>



<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" id="report-aset">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $dash_aset_query = "SELECT * FROM t_aset";
                $dash_aset_query_run = mysqli_query($koneksi, $dash_aset_query);
                $aset_total = mysqli_num_rows($dash_aset_query_run);

                    if ($aset_total > 0) {
                      echo "<h3>" . $aset_total . "</h3>";
                    } else {
                      echo "<h3>No Data</h3>";
                    }
              ?>
                <p>Data Aset</p>
              </div>
              <div class="icon">
                <!-- <i class="ion ion-bag"></i> -->
              </div>
              <a href="index.php?page=dataaset" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $dash_kategori_query = "SELECT * FROM t_kategori";
                $dash_kategori_query_run = mysqli_query($koneksi, $dash_kategori_query);
                $kategori_total = mysqli_num_rows($dash_kategori_query_run);

                    if ($kategori_total > 0) {
                      echo "<h3>" . $kategori_total . "</h3>";
                    } else {
                      echo "<h3>No Data</h3>";
                    }
              ?>
                <p>Data Kategori</p>
              </div>
              <div class="icon">
              </div>
              <a href="index.php?page=datakategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $dash_lokasi_query = "SELECT * FROM t_lokasi";
                $dash_lokasi_query_run = mysqli_query($koneksi, $dash_lokasi_query);
                $lokasi_total = mysqli_num_rows($dash_lokasi_query_run);

                    if ($lokasi_total > 0) {
                      echo "<h3>" . $lokasi_total . "</h3>";
                    } else {
                      echo "<h3>No Data</h3>";
                    }
              ?>
                <p>Data Lokasi</p>
              </div>
              <div class="icon">
              <!-- <i class="fa-solid fa-map" style="color: #d9a505;"></i> -->
              </div>
              <a href="index.php?page=datalokasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
       
    </section>