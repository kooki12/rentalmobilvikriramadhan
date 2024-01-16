<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
 */
$nik_ktp_vikri_tmp = $_POST['nik_ktp_vikri_tmp'];
$nik_ktp_vikri = $_POST['nik_ktp_vikri'];
$nama_vikri = $_POST['nama_vikri'];
$no_hp_vikri = $_POST['no_hp_vikri'];
$alamat_vikri = $_POST['alamat_vikri'];

//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_pelanggan_vikri SET
    nik_ktp_vikri='$nik_ktp_vikri',
    nama_vikri='$nama_vikri',
    no_hp_vikri='$no_hp_vikri',
    alamat_vikri='$alamat_vikri'
WHERE nik_ktp_vikri='$nik_ktp_vikri_tmp'
");

if ($update) {
//Jika proses delete berhasil
    header("location:tampil_data_pelanggan.php");
} else {
//Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_data_pelanggan.php'>Coba Lagi</a>";
}
