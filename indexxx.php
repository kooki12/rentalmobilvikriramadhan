<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Mobil - Laravel</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css" />
  </head>
  <body>
    <!-- Navbar Menu User-->
    <?php include "menu_user.php";?>

    <!-- Header-->
    <header class="bg-primary py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Rental Mobil</h1>
          <p class="lead fw-normal text-white-50 mb-0">
            hanya dengan satu sentuhan
          </p>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mb-5">Daftar Mobil</h3>
        <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="images/avanza.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Avanza</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.250.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Otomatis</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="rental_user.php">Sewa</a>

                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="images/sigra.jpeg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Sigra</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.250.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="rental_user.php">Sewa</a>

                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="images/l300.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Mitsubishi L300</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.200.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">2</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="rental_user.php">Sewa</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-primary">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; Vikri Ramadhan_2024
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
