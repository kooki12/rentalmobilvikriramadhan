<?php
include 'koneksi.php';

$nik_ktp_vikri = $_POST['nik_ktp_vikri'];
$nama_vikri = $_POST['nama_vikri'];
$no_hp_vikri = $_POST['no_hp_vikri'];
$alamat_vikri = $_POST['alamat_vikri'];

mysqli_query($koneksi, "INSERT INTO `tbl_pelanggan_vikri` (`nik_ktp_vikri`, `nama_vikri`, `no_hp_vikri`, `alamat_vikri`)
VALUES ('$nik_ktp_vikri', '$nama_vikri', '$no_hp_vikri', '$alamat_vikri');");
header("location:tampil_data_pelanggan_user.php");
