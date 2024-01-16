<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
 */
$no_trx_vikri_tmp = $_POST['no_trx_vikri_tmp'];
$no_trx_vikri = $_POST['no_trx_vikri'];
$nik_ktp_vikri = $_POST['nik_ktp_vikri'];
$no_plat_vikri = $_POST['no_plat_vikri'];
$tgl_rental_vikri = $_POST['tgl_rental_vikri'];
$jam_rental_vikri = $_POST['jam_rental_vikri'];
$harga_vikri = $_POST['harga_vikri'];
$lama_vikri = $_POST['lama_vikri'];
$total_bayar_vikri = $_POST['total_bayar_vikri'];

//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_rental_vikri SET
    no_trx_vikri='$no_trx_vikri',
    nik_ktp_vikri='$nik_ktp_vikri',
    no_plat_vikri='$no_plat_vikri',
    tgl_rental_vikri='$tgl_rental_vikri',
    jam_rental_vikri='$jam_rental_vikri',
    harga_vikri='$harga_vikri',
    lama_vikri='$lama_vikri',
    total_bayar_vikri='$total_bayar_vikri'
WHERE no_trx_vikri='$no_trx_vikri_tmp'
");

if ($update) {
//Jika proses delete berhasil
    header("location:tampil_data_rental_user.php");
} else {
//Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_data_rental_user.php'>Coba Lagi</a>";
}
