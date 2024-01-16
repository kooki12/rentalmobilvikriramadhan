<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
 */
$no_plat_vikri_tmp = $_POST['no_plat_vikri_tmp'];
$no_plat_vikri = $_POST['no_plat_vikri'];
$nama_mobil_vikri = $_POST['nama_mobil_vikri'];
$brand_mobil_vikri = $_POST['brand_mobil_vikri'];
$tipe_transmisi_vikri = $_POST['tipe_transmisi_vikri'];

//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_mobil_vikri SET
    no_plat_vikri='$no_plat_vikri',
    nama_mobil_vikri='$nama_mobil_vikri',
    brand_mobil_vikri='$brand_mobil_vikri',
    tipe_transmisi_vikri='$tipe_transmisi_vikri'
WHERE no_plat_vikri='$no_plat_vikri_tmp'
");

if ($update) {
//Jika proses delete berhasil
    header("location:tampil_data_mobil.php");
} else {
//Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_data_mobil.php'>Coba Lagi</a>";
}
