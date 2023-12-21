<?Php

include_once("link/koneksi.php");
include_once("link/fungsi.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Packages</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/HHkecil.png" rel="icon"> 
  <link href="assets/img/HHbesar.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/hotelhub-logo.png">
        <h1>HotelHub</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" >Home</a></li>
          <li><a href="packages.php"class="active">Package</a></li>
          <li><a href="history.php">History</a></li>

 
          <li><a href="contact.php">Contact</a></li>

          <li><a class="login" href="login.php">Login</a></li>
          

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- ======= bg paling atas ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/package-bg.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Package</h2>
              <p>This Packages menu is useful for users to see descriptions of the range at various levels. there are silver, gold, platinum.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Package</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    
    <!-- ============================ bg silver package =========================== -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/silverpackage-bg.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-left">
            <div class="col-lg-6 text-left">
              <h2>Silver Package</h2>
              <p>Provides comfortable accommodation with basic facilities yet budget-friendly, ideal for travelers on a tight budget.</p>
            </div>
          </div>
          <div class="col-lg-6 text-right">
            <h4>Rp 150.000 - 350.000/days</h4>
          </div>

          <div class="text-center"><button type="submit" name="submit">
            Book For Now
          </button></div>

        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
  
          </ol>
        </div>
      </nav>

    </div><!-- End Breadcrumbs -->

    

    <!-- ============================ bg GOLD package =========================== -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/goldpackage-bg.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-left">
            <div class="col-lg-6 text-left">
              <h2>Gold Package</h2>
              <p>Offers a perfect balance between comfort and affordability, providing a satisfying lodging experience for guests with a moderate budget.</p>
            </div>
          </div>
          <div class="col-lg-6 text-right">
            <h4>Rp 400.00 - 600.000/days</h4>
          </div>

          <div class="text-center"><button type="submit" name="submit">
            Book For Now
          </button></div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>

          </ol>
        </div>
      </nav>

    </div><!-- End Breadcrumbs -->

    

    <!-- ============================ bg GOLD package =========================== -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/platinumpackage-bg.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-left">
            <div class="col-lg-6 text-left">
              <h2>Platinum Package</h2>
              <p>Bringing unparalleled luxury with premium service and exclusive facilities, indulging guests who seek an extraordinary lodging experience with a high budget</p>
            </div>

          </div>
          <div class="col-lg-6 text-right">
            <h4>Rp 650.000 - 900.000+/days</h4>
          </div>
          <div class="text-center"><button type="submit" name="submit">
            Book For Now
          </button>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>

          </ol>
        </div>
      </nav>

    </div><!-- End Breadcrumbs -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <!------------------------------- SILVER -------------------------------->
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><img src="assets/img/logo-silver.png"></i></div>
            <div>
              <h4 class="title">Silver Package</h4>
              <p class="description">The Silver Package is the most economic friendly package intended for a capacity of 2 people. The facilities available are 1 bedroom, 1 bathroom. Suitable for your small family.</p>
              
            </div>
          </div>
          <!-- End Service Item -->

          <!------------------------------- GOLD ----------------------------------->
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><img src="assets/img/logo-gold.png"></div>
            <div>
              <h4 class="title">Gold Package</h4>
              <p class="description">Gold Package is intended for a capacity of 3 people. The facilities obtained are 1 bedroom, 1 bathroom, 1 kitchen, balcony, and 1 times eat. Suitable for your small family.</p>
              
            </div>
          </div><!-- End Service Item -->

          <!------------------------------- PLATINUM ----------------------------------->
          <!-- PLATINUM -->
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><img src="assets/img/logo-platinum.png"></i></div>
            <div>
              <h4 class="title">Platinum Package</h4>
              <p class="description">Gold Package is intended for a capacity of 4 people. The facilities obtained are 2 bedroom, 1 bathroom, 1 kitchen, balcony, and 2 times eat. Suitable for your small family.</p>
              
            </div>
          </div><!-- End Service Item -->

        </div>
      </div>
    </section><!-- End Featured Services Section -->

      <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

      

      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright <strong><span>HotelHub</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by <a href="https://upj.ac.id/">Three Admirals</a>
        </div>
      </div>

    </footer>
    <!-- End Footer -->



    

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>