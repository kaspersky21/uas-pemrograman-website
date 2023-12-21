<?php

include "link/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>History</title>
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
          <li><a href="packages.php">Package</a></li>
          <li><a href="history.php"class="active">History</a></li>

 
          <li><a href="contact.php">Contact</a></li>

          <li><a class="login" href="login.php">Login</a></li>
          

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/history-bg.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>History</h2>
              <p>You are on the history page, where you can view the booking history you have made previously.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>History</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    

    <!-- ======= Horizontal Pricing Section ======= -->
    <section id="horizontal-pricing" class="horizontal-pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>History</span>
          <h2>History</h2>

        </div>

        
        <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <h2>Jakarta Sweet Hotel</h2>
            
          </div>
          
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <img src="assets/img/jmenteng1-silver-hotel.png">
            
          </div>
          
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            
            <h4><sup>Rp</sup>300.000<span> / Days</span></h4>
          </div>
          
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div id="cancel" class="text-center"><a href="#" class="buy-btn" name="cancel" onclick="cancelBooking(3)">Canceled</a></div>
          </div>
          
        </div><!-- End Pricing Item -->

        

       

      </div>
    </section><!-- End Horizontal Pricing Section -->

  </main><!-- End #main -->

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

  </footer><!-- End Footer -->
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

  <!-- ... Bagian JavaScript sebelumnya ... -->

<script>
  function cancelBooking(bookingId) {
    // Kirim permintaan pembatalan ke server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Tanggapan dari server (berisi status pembatalan)
        var response = xhr.responseText;
        if (response.trim() === "success") {
          // Jika pembatalan berhasil, ubah teks tombol menjadi "Canceled"
          var cancelButton = document.getElementById('cancel' + bookingId);
          cancelButton.innerText = "Canceled";
          cancelButton.classList.add("disabled"); // Optional: Menambahkan kelas untuk menonaktifkan tombol
        } else {
          // Jika pembatalan gagal, tampilkan pesan kesalahan
          alert("Gagal membatalkan pemesanan.");
        }
      }
    };
    xhr.open("POST", "cancel_booking.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id_pembayaran=" + bookingId);
  }
</script>


<!-- ... Bagian JavaScript setelahnya ... -->


</body>

</html>