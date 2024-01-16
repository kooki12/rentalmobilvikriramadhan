<?php
include 'koneksi.php';

$username_vikri = $_POST['username_vikri'];
$password_vikri = $_POST['password_vikri'];
$nama_lengkap_vikri = $_POST['nama_lengkap_vikri'];

mysqli_query($koneksi, "INSERT INTO `tbl_user_vikri` (`id_user_vikri`, `username_vikri`, `password_vikri`, `nama_lengkap_vikri`, `level_vikri`) VALUES (NULL, '$username_vikri', '$password_vikri', '$nama_lengkap_vikri', 'user');");
header("location:login.php");
