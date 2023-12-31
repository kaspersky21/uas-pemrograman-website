<?Php

include_once("link/koneksi.php");
include_once("link/fungsi.php");

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data formulir
    $checkIn = $_POST["check_in"];
    $checkOut = $_POST["check_out"];

    // Query pencarian berdasarkan tanggal check-in dan check-out
    $query = "SELECT * FROM search-platinum WHERE city = 'Jakarta' AND package = 'Platinum' AND availability = 'available'";
    // Sesuaikan query sesuai dengan struktur database dan kondisi pencarian yang diinginkan

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika query berhasil, tampilkan hasil
        while ($row = mysqli_fetch_assoc($result)) {
            // Tampilkan informasi hotel, sesuaikan dengan struktur database
            echo "Hotel Name: " . $row["hotel_name"] . "<br>";
            echo "Price: Rp" . $row["price"] . " Ribu / Days<br>";
            echo "Description: " . $row["description"] . "<br>";
            echo "<a href='#'>See More</a><br><br>";
        }

        // Bebaskan hasil query
        mysqli_free_result($result);
    } else {
        // Jika query gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Pricing</title>
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
        <!-- Uncomment the line below if you also wish to use an image logo -->
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
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Jakarta (Platinum)</h2>
              <p>Bringing unparalleled luxury with premium service and exclusive facilities, indulging guests who seek an extraordinary lodging experience with a high budget</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Jakarta (Platinum)</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 " data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              
              <h3>Luxe Hotel</h3>
              <img src="assets/img/jpluit-platinum-hotel.png">
              <h4><sup>Rp</sup>720<span>Ribu / Days</span></h4>
              <img src="assets/img/platinum-pluit-jakarta.png">
              <p>Best Hotel for your adventure with your friend </p>
              <a href="#" class="buy-btn">See More</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              
              <h3>Vista Horizon Resort</h3>
              <img src="assets/img/jblokm-platinum-hotel.png">
              <h4><sup>Rp</sup>800<span>Ribu / Days</span></h4>
              <img src="assets/img/platinum-blokm-jakarta.png">
              <p>Best Hotel for your adventure with your friend </p>
              <a href="#" class="buy-btn">See More</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              
              <h3>Elite Suites Hotel</h3>
              <img src="assets/img/jpondokindah-platinum-hotel.png">
              <h4><sup>Rp</sup>780<span>Ribu / Days</span></h4>
              <img src="assets/img/platinum-pondokindah-jakarta.png">
              <p>Best Hotel for your adventure with your friend </p>
              <a href="#" class="buy-btn">See More</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              
              <h3>Radiant Peaks Hotel</h3>
              <img src="assets/img/jsudirman-platinum-hotel.png">
              <h4><sup>Rp</sup>700<span>Ribu / Days</span></h4>
              <img src="assets/img/platinum-sudirman-jakarta.png">
              <p>Best Hotel for your adventure with your friend </p>
              <a href="#" class="buy-btn">See More</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              
              <h3>Platinum Pinnacle Hotel</h3>
              <img src="assets/img/jsenayan-platinum-hotel.png">
              <h4><sup>Rp</sup>800<span>Ribu / Days</span></h4>
              <img src="assets/img/platinum-senayan-jakarta.png">
              <p>Best Hotel for your adventure with your friend </p>
              <a href="#" class="buy-btn">See More</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              
              <h3>Celestial Heights Hotel</h3>
              <img src="assets/img/jsenayan2-platinum-hotel.png">
              <h4><sup>Rp</sup>750<span>Ribu / Days</span></h4>
              <img src="assets/img/platinum-senayan-jakarta.png">
              <p>Best Hotel for your adventure with your friend </p>
              <a href="#" class="buy-btn">See More</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Horizontal Pricing Section ======= -->
    

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

  <script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body>

</html>