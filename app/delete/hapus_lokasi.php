<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM t_lokasi WHERE id_lokasi = '$id'");
header('Location: ../index.php?page=datalokasi');
?>
