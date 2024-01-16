<?php
include 'koneksi.php';

$no_trx_vikri = $_POST['no_trx_vikri'];
$nik_ktp_vikri = $_POST['nik_ktp_vikri'];
$no_plat_vikri = $_POST['no_plat_vikri'];
$tgl_rental_vikri = $_POST['tgl_rental_vikri'];
$jam_rental_vikri = $_POST['jam_rental_vikri'];
$harga_vikri = $_POST['harga_vikri'];
$lama_vikri = $_POST['lama_vikri'];
$total_bayar_vikri = $_POST['total_bayar_vikri'];

mysqli_query($koneksi, "INSERT INTO `tbl_rental_vikri` (`no_trx_vikri`, `nik_ktp_vikri`, `no_plat_vikri`, `tgl_rental_vikri`, `jam_rental_vikri`, `harga_vikri`,`lama_vikri`,`total_bayar_vikri`)
VALUES ('$no_trx_vikri', '$nik_ktp_vikri', '$no_plat_vikri', '$tgl_rental_vikri', '$jam_rental_vikri', '$harga_vikri', '$lama_vikri', '$total_bayar_vikri');");
header("location:tampil_data_rental.php");
