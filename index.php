<?Php

include_once("link/koneksi.php");
include_once("link/fungsi.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index</title>
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
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="packages.php">Package</a></li>
          <li><a href="history.php">History</a></li>

 
          <li><a href="contact.php">Contact</a></li>

          <li><a class="login" href="login.php">Login</a></li>
          

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- ======= hero adalah foto background diambil dari css ======= -->
  <section id="hero" class="hero d-flex align-items-center ">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Best Hotel for Travelers</h2>
          <p data-aos="fade-up" data-aos-delay="100">Find a variety of accommodation options on HotelHub ranging from luxury hotels to budget-friendly accommodation, accompanied by trusted reviews from our customers. We are committed to providing fast and easy access to various destinations throughout Indonesia.</p>

          
          
          
        </div>
        
      </div>    
      
    </div>
    

  </section><!-- End Hero Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="Searchtitle">


    </div>


    <div class="container" >

      <h2>Search Your Hotel</h2>
      <!-- ======= FORM SEARCH ATAS ======= -->
      <form class="form">
        <label for="search">
            <input class="input " type="text" required="" placeholder="Search Hotel" id="search">
            <div class="fancy-bg "></div>
            <div class="search ">
                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr ">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
            </div>
            <button class="close-btn" type="reset">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </label>
      </form>
      <!-- ======= FORM SEARCH ATAS (SELESAI) ======= -->
      

      <hr class="mb-4">
      <div class="row gy-2 mt-2">

        <div class="col-lg-12">
          <!-- ======= FORM SEARCH BAWAH ======= -->
          <!-- ============================================================ PHP YANG DITUJU =============================================== -->
          <!-- ======= ACTION BISA DI HAPUS, KARENA KAMI MENGGUNAKAN onsubmit JS  ======= -->
          <form id="searchForm" action="search-silver.php" method="post" role="form" class="php-email-form" onsubmit="return redirectToSearchSilver()">

            <div class="row">
              <!-- ======= TANGGAL ======= -->

              <div class="col-md-4 form-group">
                <p>Check In:</p>
                <input type="date" placeholder=" Choose Date" class="form-control" id="date" name="check_in"/>
              </div>

              <div class="col-md-4 form-group ">
                <p>City:</p>
                <select class="custom-select d-block w-100 h-50" id="country" name="city" required>
                  <option value="">Choose</option>
                  <option>Jakarta</option>
                  <option>Bandung</option>
                  <option>Yogyakarta</option>
                  <option>Surabaya</option>
                  <option>Malang</option>
                  <option>Bali</option>
                </select>
              </div>

              <div class="col-md-4 form-group">
                <p>Guest:</p>
                <select class="custom-select d-block w-100 h-50" id="country" name="guest" required>
                  <option value="">Choose</option>
                  <option>1 Person</option>
                  <option>2 Person</option>
                  <option>3 Person</option>
                </select>
              </div>
            </div>

            <div class="row">
              <!-- ======= TANGGAL ======= -->
              <div class="col-md-4 form-group">
                <p>Check Out:</p>
                <input type="date" placeholder=" Choose Date" class="form-control" id="date" name="check_out"/>
              </div>

              <div class="col-md-4 form-group ">
                <p>Packages:</p>
                <select class="custom-select d-block w-100 h-50" id="country" name="packages" required>
                  <option value="">Choose</option>
                  <option>Silver</option>
                  <option>Gold</option>
                  <option>Platinum</option>
                </select>
              </div>
            </div>


            <hr class="mb-4">
          
            
            <div class="text-center"><button type="submit" name="submit">Search</button></div>
          </form>
          <!-- ======= FORM SEARCH BAWAH ======= -->
          
        </div><!-- End Form -->

      </div>

    </div>
  </section><!-- End Section -->


  

  
  

  <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><img src="assets/img/pilihpaket2.png"></i></div>
          <div>
            <h4 class="title">1. Pick a Package</h4>
            <p class="description">Choose the hotel package according to your needs.</p>
            
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><img src="assets/img/date2.png"></div>
          <div>
            <h4 class="title">2. Pick a Date </h4>
            <p class="description">Choose your preferred entry date and exit date.</p>
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><img src="assets/img/booknow2.png"></i></div>
          <div>
            <h4 class="title">3. Booking</h4>
            <p class="description">Press the booking button and proceed to payment. Enjoy your vacation.</p>
            
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



  <!-- Tambahkan skrip berikut -->
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var searchForm = document.getElementById('searchForm');

          if (searchForm) {
              searchForm.addEventListener('submit', function (event) {
                  event.preventDefault(); // Menghentikan pengiriman formulir bawaan
                  // Lakukan validasi formulir jika diperlukan

                  // Ambil nilai paket yang dipilih
                  var selectedPackage = searchForm.elements.packages.value;

                  // Lanjutkan dengan pengalihan ke halaman yang sesuai
                if (selectedPackage === "Silver") {
                    window.location.href = "search-silver.php";
                } 
                else if (selectedPackage === "Gold") {
                    window.location.href = "search-gold.php";
                }
                else if (selectedPackage === "Platinum") {
                    window.location.href = "search-platinum.php";
                }
              });
          }
      });

      function redirectToSearchSilver() {
        // Lakukan validasi formulir jika diperlukan

        // Lakukan pengalihan ke halaman search-silver.php
        window.location.href = "search-silver.php";

        // Hindari pengiriman formulir bawaan
        return false;
      }

      function redirectToSearchGold() {
        // Lakukan validasi formulir jika diperlukan

        // Lakukan pengalihan ke halaman search-gold.php
        window.location.href = "search-gold.php";

        // Hindari pengiriman formulir bawaan
        return false;
      }

      function redirectToSearchPlatinum() {
        // Lakukan validasi formulir jika diperlukan

        // Lakukan pengalihan ke halaman search-gold.php
        window.location.href = "search-platinum.php";

        // Hindari pengiriman formulir bawaan
        return false;
      }
  </script>

  

</body>

</html>