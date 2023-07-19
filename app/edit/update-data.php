<?php
include ('../../conf/config.php');

if (isset($_GET['proses'])) {
    $id_aset   = $_GET['id_aset'];
    $nama_aset = $_GET['nama_aset'];
    $jumlah = $_GET['jumlah'];
    $id_kategori = $_GET['id_kategori'];
    $id_lokasi = $_GET['id_lokasi'];
    $jenis = $_GET['jenis'];
    $kondisi = $_GET['kondisi'];
    $keterangan = $_GET['keterangan'];
}

$query = mysqli_query ($koneksi, "UPDATE t_aset SET nama_aset='$nama_aset', jumlah='$jumlah', id_kategori='$id_kategori', id_lokasi='$id_lokasi', jenis='$jenis', kondisi='$kondisi', keterangan='$keterangan' WHERE id_aset='$id_aset'");
header('Location: ../index.php?page=dataaset');

?>