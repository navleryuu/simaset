<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM t_aset WHERE id_aset = '$id'");
header('Location: ../index.php?page=dataaset');
?>
