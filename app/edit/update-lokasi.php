<?php
include ('../../conf/config.php');

if (isset($_GET['proses'])) {
    $id_lokasi   = $_GET['id_lokasi'];
    $nama_lokasi = $_GET['nama_lokasi'];
}

$query = mysqli_query ($koneksi, "UPDATE t_lokasi SET nama_lokasi='$nama_lokasi' WHERE id_lokasi='$id_lokasi'");
header('Location: ../index.php?page=datalokasi');
?>