<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username_vikri = $_POST['username_vikri'];
$password_vikri = $_POST['password_vikri'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from tbl_user_vikri where username_vikri='$username_vikri' and password_vikri='$password_vikri'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level_vikri'] == "admin") {

        // buat session login dan username
        $_SESSION['username_vikri'] = $username_vikri;
        $_SESSION['level_vikri'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:tampil_data_rental.php");

        // cek jika user login sebagai user
    } else if ($data['level_vikri'] == "user") {
        // buat session login dan username
        $_SESSION['username_vikri'] = $username_vikri;
        $_SESSION['level_vikri'] = "user";
        // alihkan ke halaman dashboard pegawai
        header("location:indexxx.php");

    } else {

        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}
