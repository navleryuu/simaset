<?php
include('../../conf/config.php');

if (isset($_GET['proses'])) {
    $nama_aset = $_GET['nama_aset'];
    $merk = $_GET['merk'];
    $jumlah = $_GET['jumlah'];
    $id_kategori = $_GET['id_kategori'];
    $id_lokasi = $_GET['id_lokasi'];
    $jenis = $_GET['jenis'];
    $kondisi = $_GET['kondisi'];
    $keterangan = $_GET['keterangan'];
}

$query = mysqli_query($koneksi,"INSERT INTO t_aset (nama_aset, merk, jumlah, id_kategori, id_lokasi, jenis, kondisi, keterangan)
VALUES ('$nama_aset', '$merk', $jumlah, $id_kategori, $id_lokasi, '$jenis', '$kondisi', '$keterangan')");
header('Location: ../index.php?page=dataaset');

// $query = mysqli_query($koneksi, "INSERT INTO t_kategori (nama_kategori) VALUES ('$nama_kategori')");
// header('Location: ../index.php?page=datakategori');
?>