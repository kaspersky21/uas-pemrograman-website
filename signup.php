<?php
require  ("link/koneksi.php");

$epassword = password_hash($password, PASSWORD_DEFAULT);

//register
if(isset($_POST['register'])){

  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password']; 
  
  
  //masukan data ke db
  $insert = mysqli_query($conn, "INSERT INTO user (nama,username,email,password) values ('$nama','$username','$email','$epassword')");
  
  //jika db berhasil dimasukkan
  if($insert){
      header('location:login.php'); //pindah ke halaman login
  }else{
      //jika gagal
      echo 
      '<script>
      alert("Registrasi Gagal");
      window.location.href="signup.php";
  
      </script>';   
  }
  
  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sign Up</title>
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
                <img src="assets/img/hotelhub-logo.png">
                <h1>HotelHub</h1>
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="packages.php">Package</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a class="login" href="login.php" class="active">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2 style="font-weight: bold;">Sign Up</h2>
                            <p style="font-weight: 500;">Welcome to the sign-up page. Please register if you don't have an account yet to enjoy comfortable access to HotelHub</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Get a Quote Section ======= -->
        <section id="login" class="login">
            <div class="container" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/login-bg.png);"></div>
                    <div class="col-lg-7 ">
                        <form action="signup.php" method="post" role="form" class="php-email-form">
                            <h2 style="font-weight: bold;">Sign Up</h2>
                            <p style="font-weight: 500;">Already have an account?<a href="login.php"> Login </a></p>
                            <div class="row">
                                <div class="col">
                                    <h4 style="margin-bottom: 10px;">Nama</h4>
                                    <input type="text" name="nama" class="form-control" placeholder="" required>
                                </div>
                                <div class="col">
                                    <h4 style="margin-bottom: 10px;">Username</h4>
                                    <input type="text" class="form-control" name="username" placeholder="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 style="margin-bottom: 10px;">Email</h4>
                                    <input type="email" name="email" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 style="margin-bottom: 10px;">Password</h4>
                                    <input type="password" class="form-control" name="password" placeholder="" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="register"class="text-center" style="margin-top: 20px;" style="color: white;" >Create Account</button>
                            </div>
                            <div class="garis">
                              <hr style="border: 1px solid black"> 
                              <p style="font-weight: 500; text-align: center;">Or Login With</p>
                            </div>

                            <div class="buttons-container">
                  
                            <!--<div class="icon flex-shrink-0" style="align-items: center;"><img src="assets/img/orloginwith2.png"></div>-->

                              <!-- ======= Apple Button ======= -->
                              <div class="apple-login-button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="apple-icon" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M747.4 535.7c-.4-68.2 30.5-119.6 92.9-157.5-34.9-50-87.7-77.5-157.3-82.8-65.9-5.2-138 38.4-164.4 38.4-27.9 0-91.7-36.6-141.9-36.6C273.1 298.8 163 379.8 163 544.6c0 48.7 8.9 99 26.7 150.8 23.8 68.2 109.6 235.3 199.1 232.6 46.8-1.1 79.9-33.2 140.8-33.2 59.1 0 89.7 33.2 141.9 33.2 90.3-1.3 167.9-153.2 190.5-221.6-121.1-57.1-114.6-167.2-114.6-170.7zm-105.1-305c50.7-60.2 46.1-115 44.6-134.7-44.8 2.6-96.6 30.5-126.1 64.8-32.5 36.8-51.6 82.3-47.5 133.6 48.4 3.7 92.6-21.2 129-63.7z"></path>
                                </svg>

                                <!-- ======= Apple Button ======= -->
                                <span>Log in with Apple</span>
                              </div>

                              <!-- ======= Apple Button ======= -->
                              <div class="google-login-button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px" class="google-icon" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                  <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
                                    c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
                                    c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                              <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
                                    C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                              <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
                                    c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                              <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
                                    c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                </svg>

                                <!-- ======= Google Button ======= -->
                                <span>Log in with Google</span>
                              </div>

                            </div>
                        </form>
                    </div>
                </div>

                

            </div>
        </section>
        <!-- End Get a Quote Section -->
    </main>

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