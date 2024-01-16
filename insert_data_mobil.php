<?php
include 'koneksi.php';

$no_plat_vikri = $_POST['no_plat_vikri'];
$nama_mobil_vikri = $_POST['nama_mobil_vikri'];
$brand_mobil_vikri = $_POST['brand_mobil_vikri'];
$tipe_transmisi_vikri = $_POST['tipe_transmisi_vikri'];

mysqli_query($koneksi, "INSERT INTO `tbl_mobil_vikri` (`no_plat_vikri`, `nama_mobil_vikri`, `brand_mobil_vikri`, `tipe_transmisi_vikri`)
VALUES ('$no_plat_vikri', '$nama_mobil_vikri', '$brand_mobil_vikri', '$tipe_transmisi_vikri');");
header("location:tampil_data_mobil.php");
