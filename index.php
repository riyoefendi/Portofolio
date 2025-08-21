<?php
include 'admin/koneksi.php';

// About
$queryAbouts = mysqli_query($koneksi, "SELECT * FROM about ORDER BY id DESC");
$rowAbouts = mysqli_fetch_all($queryAbouts, MYSQLI_ASSOC);

$queryContacts = mysqli_query($koneksi, "SELECT * FROM contact ORDER BY id DESC");
$rowContacts = mysqli_fetch_all($queryContacts, MYSQLI_ASSOC);

// $queryBlogs = mysqli_query($koneksi, "SELECT * FROM blogs WHERE is_active ORDER BY id DESC");
$queryPortofolios = mysqli_query($koneksi, "SELECT categories.name, portofolios.* FROM portofolios 
JOIN categories ON categories.id = portofolios.id_category 
ORDER BY portofolios.id DESC");
$rowPortofolios = mysqli_fetch_all($queryPortofolios, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Index - iPortfolio Bootstrap Template</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets1/assets/img/favicon.png" rel="icon" />
  <link href="assets1/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link
    href="assets1/assets/vendor/bootstrap/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="assets1/assets/vendor/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet" />
  <link href="assets1/assets/vendor/aos/aos.css" rel="stylesheet" />
  <link
    href="assets1/assets/vendor/glightbox/css/glightbox.min.css"
    rel="stylesheet" />
  <link href="assets1/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Main CSS File -->
  <link href="assets1/assets/css/main.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
  <!-- Start Header -->
  <?php include 'inc/header.php'; ?>
  <!-- end Header -->

  <main class="main">
    <?php
    if (isset($_GET['page'])) {
      if (file_exists('content/' . $_GET['page'] . ".php")) {
        include 'content/' . $_GET['page'] . '.php';
      } else {
        include 'content/notfound.php';
      }
    } else {
      include 'content/home.php';
    }
    ?>
  </main>

  <?php include 'inc/footer.php'; ?>

  <!-- Scroll Top -->
  <a
    href="#"
    id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/assets/vendor/php-email-form/validate.js"></script>
  <script src="assets1/assets/vendor/aos/aos.js"></script>
  <script src="assets1/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets1/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets1/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets1/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets1/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets1/assets/js/main.js"></script>
</body>

</html>