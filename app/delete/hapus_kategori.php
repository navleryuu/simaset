<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM t_kategori WHERE id_kategori = '$id'");
header('Location: ../index.php?page=datakategori');
?>
