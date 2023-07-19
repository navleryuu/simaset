<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'asetmasjid');

 if(!$koneksi){
    die("Koneksi Gagal:". mysqli_connect_error());
 }
?>