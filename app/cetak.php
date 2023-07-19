<?php include '../conf/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <table class="table table-bordered" style="border: 2px solid black;">
        <tbody>
            <tr style="border-bottom: 2px solid black;">

                <td style="border-right: 2px solid black; "><img src="./dist/img/pln1.png" alt="" style="width: 75px;" >
                </td>
                <td style="border-right: 2px solid black; ">PT. PLN (PERSERO) <br>
                    Pusat Pendidikan pelatihan <br>
                    (Corporate University) <br>Learning unit Tuntungan <br>Jalan Lapangan Golf Tuntungan No. 35 <br>
                    Telp: (061) 836 0355, 863 0511, Fax: (061) 836 0613</td>
                <td style="border-right: 2px solid black; width: 100px"><img src="./dist/img/pln.png" class="w-100"
                        alt="" srcset=""></td>
                <td>Tanggal : <?php echo date('d-m-Y'); ?> </td>
            </tr>
            <tr style="border-bottom: 2px solid black">
                <td class="text-center h4 w-100 " colspan="4">SISTEM MANAJEMEN TERINTEGRASI</td>
            </tr>
            <tr>
                <td colspan="4" class="text-center h5">
                    Daftar Inventaris <br>
                    Lokasi/ruang: Masjid Ath-Thoyyibah
                </td>
            </tr>

        </tbody>
    </table>
    <table id="example1" class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Aset</th>
                <th>Merk</th>
                <th>Jumlah</th>
                <th>Nama Kategori</th>
                <th>Lokasi</th>
                <th>Jenis</th>
                <th>Kondisi</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <?php 
    $no = 0;
    $query = mysqli_query($koneksi, "SELECT a.*, k.nama_kategori, l.nama_lokasi FROM t_aset a
    INNER JOIN t_kategori k ON a.id_kategori = k.id_kategori
    INNER JOIN t_lokasi l ON a.id_lokasi = l.id_lokasi");
    
    while($aset = mysqli_fetch_array($query)){
        $no++;


?>

            <tr>
                <td width='5%'><?php echo $no; ?></td>
                <td><?php echo $aset[1]; ?></td>
                <td><?php echo $aset[2]; ?></td>
                <td><?php echo $aset[3]; ?></td>
                <td><?php echo $aset['nama_kategori']; ?></td>
                <td><?php echo $aset['nama_lokasi']; ?></td>
                <td><?php echo $aset[6]; ?></td>
                <td><?php echo $aset[7]; ?></td>
                <td><?php echo $aset[8]; ?></td>



            </tr>
            <?php  } ?>
        </tbody>

    </table>

    <div class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <span >Mengetahui</span> <br>
                Ketua Tim Inventaris <br><br><br><br><br>
                Adhiana
            </div>
            <div class="col text-center">
                <span >Mengetahui</span> <br>
                Ketua Tim Inventaris <br><br><br><br><br>
                Andrianto
            </div>
        </div>
    </div>
    <script>
        window.print()
    </script>
</body>

</html>