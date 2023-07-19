<?php
include('../../conf/config.php');

if(isset($_POST['proses'])){
  $nama_kategori = $_POST['nama_kategori'];
  $query = mysqli_query($koneksi, "INSERT INTO t_kategori (nama_kategori) VALUES ('$nama_kategori')");

  if($query){
    header('Location: ../index.php?page=datakategori');
  } else {
    // Penanganan kesalahan jika query tidak berhasil
    echo "Gagal menambahkan kategori.";
  }
}

?>
