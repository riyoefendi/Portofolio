<?php
include 'admin/koneksi.php';


// seeting
// $querySetting = mysqli_query($koneksi, "SELECT * FROM settings LIMIT 1");
// $rowSetting = mysqli_fetch_assoc($querySetting);

$queryResumes = mysqli_query($koneksi, "SELECT * FROM resume ORDER BY id DESC");
$rowResumes = mysqli_fetch_all($queryResumes, MYSQLI_ASSOC);

$queryContacts = mysqli_query($koneksi, "SELECT * FROM contact ORDER BY id DESC");
$rowContacts = mysqli_fetch_all($queryContacts, MYSQLI_ASSOC);

$queryAbouts = mysqli_query($koneksi, "SELECT * FROM about WHERE is_active ORDER BY id DESC");
$rowAbouts = mysqli_fetch_all($queryAbouts, MYSQLI_ASSOC);

// $queryClients = mysqli_query($koneksi, "SELECT * FROM client WHERE is_active ORDER BY id DESC");
// $rowClients = mysqli_fetch_all($queryClients, MYSQLI_ASSOC);

// $queryCards = mysqli_query($koneksi, "SELECT * FROM card_content ORDER BY id DESC");
// $rowCards = mysqli_fetch_all($queryCards, MYSQLI_ASSOC);

// $queryBlogs = mysqli_query($koneksi, "SELECT * FROM blogs WHERE is_active ORDER BY id DESC");
// $queryBlogs = mysqli_query($koneksi, "SELECT categories.name, blogs.* FROM blogs 
// JOIN categories ON categories.id = blogs.id_category 
// ORDER BY blogs.id DESC");
// $rowBlogs = mysqli_fetch_all($queryBlogs, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Riyo Efendi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include 'inc2/css.php' ?>
  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <!-- header -->
  <?php include 'inc2/header.php' ?>

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

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Alex Smith</h2>
        <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->

    <!-- /About Section -->


    <!-- Resume Section -->

    <!-- /Resume Section -->

    <!-- Portfolio Section -->

    <!-- /Portfolio Section -->




    <!-- Contact Section -->

    <!-- /Contact Section -->

  </main>

  <!-- footer -->
  <?php include 'inc2/footer.php' ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>