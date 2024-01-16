<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 mb-4">
<?php include "menu_user.php";?>
</div>
</div>
<div>
  <h3 class="heading">Data Rental - Vikri Ramadhan</h3>
</div>
<?php
$notrx = "TRX-" . date("Ymdhis");
?>

<div class="card border-success mb-3" >
<div class="card-body text-success">
<form method="POST" action="insert_rental_user.php" >

<div class="row">
  <div class="col mt-3">
    <label for="no_trx_vikri" class="form-label">No TRX :</label>
    <input type="text" class="form-control" name="no_trx_vikri" id="no_trx_vikri"
    placeholder="First name" aria-label="First name" value="<?php echo $notrx; ?>" readonly>
  </div>
  <div class="col mt-3">
      <label for="tgl_rental_vikri" class="form-label">Tanggal Ambil :</label>
      <input type="date" name="tgl_rental_vikri" class="form-control"
      id="tgl_rental_vikri" placeholder="Masukan Tanggal Lahir" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3">
    <label for="nik_ktp_vikri" class="form-label">Pelanggan :</label>
        <select name="nik_ktp_vikri" class="form-control">
        <option value=""> -- Pilih Pelanggan --</option>
        <?php
include "koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_vikri");
while ($data = mysqli_fetch_array($tampil)) {
    echo "<option value='$data[nik_ktp_vikri]'>$data[nik_ktp_vikri] - $data[nama_vikri] </option>";
}
?>
        </select>
  </div>
  <div class="col mt-3">
      <label for="jam_rental_vikri" class="form-label">Jam Ambil :</label>
      <input type="time" name="jam_rental_vikri" class="form-control"
      id="jam_rental_vikri" placeholder="Masukan Waktu Pengambilan" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3">
        <label for="no_plat_vikri" class="form-label">Mobil:</label>
        <select name="no_plat_vikri" class="form-control">
        <option value=""> -- Pilih Mobil --</option>
        <?php
include "koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_vikri");
while ($data = mysqli_fetch_array($tampil)) {
    echo "<option value='$data[no_plat_vikri]'>$data[no_plat_vikri] - $data[nama_mobil_vikri] </option>";
}
?>
        </select>
  </div>
  <script>
    function hitungTotal() {
      var lama_vikri = parseFloat(document.getElementById('lama_vikri').value);
      var harga_vikri = parseFloat(document.getElementById('harga_vikri').value);

      if (!isNaN(lama_vikri) && !isNaN(harga_vikri)) {
        var total_bayar_vikri = lama_vikri * harga_vikri;
        document.getElementById('total_bayar_vikri').value = total_bayar_vikri;
      } else {
        document.getElementById('total_bayar_vikri').value = '';
      }
    }
  </script>
  <div class="col mt-3">
      <label for="lama_vikri" class="form-label">Lama Rental :</label>
      <input type="text" name="lama_vikri" class="form-control"
      id="lama_vikri" placeholder="Masukan Lama Rental /hari" oninput="hitungTotal()" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3"></div>
  <div class="col mt-3">
    <label for="harga_vikri" class="form-label">Harga Rental :</label>
    <input type="text" class="form-control" name="harga_vikri" id="harga_vikri"
    placeholder="Harga Rental" aria-label="First name" oninput="hitungTotal()" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3"></div>
  <div class="col mt-3">
      <label for="total_bayar_vikri" class="form-label">Total Bayar :</label>
      <input type="text" name="total_bayar_vikri" class="form-control"
      id="total_bayar_vikri" placeholder="Total Bayar" readonly>
  </div>
</div>
</div>
<div class="row">
  <div class="col mt-3"></div>
 <div class="col mt-3" class="heading">
        <a href="login.php" class="btn btn-warning">Keluar</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
<div class="row">
  <div class="col mt-3"></div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html
