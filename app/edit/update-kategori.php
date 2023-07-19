<?php
include ('../../conf/config.php');

if (isset($_GET['proses'])) {
    $id_kategori   = $_GET['id_kategori'];
    $nama_kategori = $_GET['nama_kategori'];
}

$query = mysqli_query ($koneksi, "UPDATE t_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");
header('Location: ../index.php?page=datakategori');
?>