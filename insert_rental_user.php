<?php
include 'koneksi.php';

$no_trx_yusri = $_POST['no_trx_yusri'];
$nik_ktp_yusri = $_POST['nik_ktp_yusri'];
$no_plat_yusri = $_POST['no_plat_yusri'];
$tgl_rental_yusri = $_POST['tgl_rental_yusri'];
$jam_rental_yusri = $_POST['jam_rental_yusri'];
$harga_yusri = $_POST['harga_yusri'];
$lama_yusri = $_POST['lama_yusri'];
$total_bayar_yusri = $_POST['total_bayar_yusri'];

mysqli_query($koneksi, "INSERT INTO `tbl_rental_yusri` (`no_trx_yusri`, `nik_ktp_yusri`, `no_plat_yusri`, `tgl_rental_yusri`, `jam_rental_yusri`, `harga_yusri`,`lama_yusri`,`total_bayar_yusri`)
VALUES ('$no_trx_yusri', '$nik_ktp_yusri', '$no_plat_yusri', '$tgl_rental_yusri', '$jam_rental_yusri', '$harga_yusri', '$lama_yusri', '$total_bayar_yusri');");
header("location:tampil_data_rental_user.php");
