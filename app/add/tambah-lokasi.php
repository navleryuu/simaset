<?php
include('../../conf/config.php');

if(isset($_POST['proses'])){
  $nama_lokasi = $_POST['nama_lokasi'];
  $query = mysqli_query($koneksi, "INSERT INTO t_lokasi (nama_lokasi) VALUES ('$nama_lokasi')");

  if($query){
    header('Location: ../index.php?page=datalokasi');
  } else {
    // Penanganan kesalahan jika query tidak berhasil
    echo "Gagal menambahkan lokasi.";
  }
}

?>
