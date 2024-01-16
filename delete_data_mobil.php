<?php
include "koneksi.php";
/* Mengambil nilai no_trx dari parameter get
yang dikirim dari tampil data rental
 */
$nim = $_GET['no_plat_vikri'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_mobil_vikri WHERE
no_plat_vikri='$_GET[no_plat_vikri]'");
if ($delete) {
//Jika proses delete berhasil
    header("location:tampil_data_mobil.php");
} else {
//Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_data_mobil.php'>Coba Lagi</a>";
}
