<?php
include "link/koneksi.php";

if (isset($_POST['checkin_date']) && isset($_POST['checkout_date']) && isset($_POST['guest_count'])) {
    $checkin_date = $_POST['checkin_date'];
    $checkout_date = $_POST['checkout_date'];
    $guest_count = $_POST['guest_count'];

    // Hitung selisih hari
    $datetime1 = new DateTime($checkin_date);
    $datetime2 = new DateTime($checkout_date);
    $interval = $datetime1->diff($datetime2);
    $duration = $interval->days;

    // Harga per malam (misalnya, 100 ribu)
    $price_per_night = 100000;

    // Harga tambahan per tamu (misalnya, 50 ribu per tamu)
    $additional_price_per_guest = 50000;

    // Hitung total harga berdasarkan durasi menginap dan jumlah tamu
    $total_price = ($price_per_night * $duration) + ($additional_price_per_guest * $guest_count);

    // Tampilkan total harga
    echo "Total Price: $total_price";
} else {
    
}






if(isset($_POST['booking'])){

$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guest = $_POST['guest']; 
$price = $_POST['price'];
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$email = $_POST['email']; 
$phonenumber = $_POST['phonenumber']; 
 


//masukan data ke db
$insert = mysqli_query($conn, "INSERT INTO pembayaran (checkin,checkout,guest, price, firstname, lastname, email, phonenumber) values ('$checkin','$checkout','$guest','$price','$firstname','$lastname' ,'$email','$phonenumber')");

//jika db berhasil dimasukkan
if($insert){
    header('location:index.php'); //pindah ke halaman login
}else{
    //jika gagal
    echo 
    '<script>
    alert("booking Gagal");
    window.location.href="preview-silver.php";

    </script>';   
}

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Preview Silver</title>
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
              <h2>Preview (Silver)</h2>
              <p>Please see the specifications, and if you are interested. just pay straight away</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Preview (Silver)</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            
            <img src="assets/img/jmenteng1-preview-silver-hotel.png" alt="" class="img-fluid">
            
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>The Unknown Hotel Jakarta</h3>
            <h4>Kemang, Jakarta</h4>
            <img src="assets/img/silver-besar.png" class="img-fluid" alt="">

            

            <p>
              The Unknow Hotel Jakarta are best choise for who want to take some vacation with family or some friend. With good price on your hand, you can enjoy all facility that this hotel offers.
            </p>
            <ul>
              
              <li class="list-group-item d-flex justify-content-between">
              
            <form method="post" action="preview-silver.php" id="bookingForm">
                <div class="col-md-12 form-group">

                
                  <input type="text" name="price" id="price"  style="display: none;"/>


                  <h3 class="my-4 ">Check In:</h3>
                  <input type="date" name="checkin" placeholder=" Choose Date" class="form-control" id="datein" />

                  <h3 class="my-4 ">Check Out:</h3>
                  <input type="date" name="checkout" placeholder=" Choose Date" class="form-control" id="dateout" />

                  
                  <h3 class="my-4 ">Guest:</h3>
                  <!--<select class="custom-select d-block w-100 h-50" id="country" required>
                    <option value="">Choose</option>
                    <option>1 Person</option>
                    <option>2 Person</option>
                    <option>3 Person</option> 
                </select>-->
                    <input type="text" name="guest" id="country" class="form-control" placeholder="Masukkan Banyak Orang">

                     <input type="text" name="namahotel" placeholder="" class="form-control" id="namahotel" style="display: none;" value="The Unknown Hotel" readonly/>
                  
                </div>
                <div class="col">
                    <div id="result"></div>
                    <div id="totalPrice"></div>
                </div>

        <div class="container" >

        <hr class="mb-4">
        <div class="row gy-4 mt-4">

         <div class="col-lg-12">
              
            <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="firstname" class="form-control" id="nama awal" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="lastname" id="nama akhir" placeholder="Last Name" required>
                </div>
              </div>



              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="phonenumber" id="number" placeholder="Phone Number" required>
                </div>
              </div>

              
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">I agree to all conditions. I will account for any fraud in accordance with the provisions.</label>
              </div>
              

              <hr class="mb-4">
            
              <div class="my-3">
                <div class="text-center"><button type="submit" name="booking">Booking Now</button></div>
              </div>


        </div>

      </div>
            </form>

        
              </li>
            </ul>
          </div>
        </div>
        

       <script>
        // Mendapatkan referensi elemen formulir dan elemen hasil
        var bookingForm = document.getElementById('bookingForm');
        var resultContainer = document.getElementById('result');

        // Menambahkan event listener untuk setiap perubahan pada formulir
        bookingForm.addEventListener('input', function () {
            calculateTotalPrice();
        });

        function calculateTotalPrice() {
            var checkinDate = document.getElementById('datein').value;
            var checkoutDate = document.getElementById('dateout').value;
            var guestCount = document.getElementById('country').value;

            // Hitung selisih hari
            var startDate = new Date(checkinDate);
            var endDate = new Date(checkoutDate);
            var duration = (endDate - startDate) / (1000 * 60 * 60 * 24);

            // Harga per malam (misalnya, 100 ribu)
            var pricePerNight = 200000;

            // Harga tambahan per tamu (misalnya, 50 ribu per tamu)
            var additionalPricePerGuest = 50000;

            // Hitung total harga
            var totalPrice = (pricePerNight * duration) + (additionalPricePerGuest * guestCount);

            // Tampilkan hasil
            resultContainer.innerHTML = '<h3 class="my-4 ">Total Bayar: </h3>' +  totalPrice;

            document.getElementById('price').value = totalPrice;
        }   
    </script>

        
    </section><!-- End About Us Section -->
  
    

    
    

    <!-- ======= Contact Section ======= -->
    
      

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

</body>

</html>