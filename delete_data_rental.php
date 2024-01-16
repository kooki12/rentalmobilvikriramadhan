<?php
include "koneksi.php";
/* Mengambil nilai no_trx dari parameter get
yang dikirim dari tampil data rental
 */
$nim = $_GET['no_trx_vikri'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_rental_vikri WHERE
no_trx_vikri='$_GET[no_trx_vikri]'");
if ($delete) {
//Jika proses delete berhasil
    header("location:tampil_data_rental.php");
} else {
//Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_data_rental.php'>Coba Lagi</a>";
}
