<?php
require_once('config.php');
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VisBoard/Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/web-icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="visboard-logo">
      </a>

      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
        <a class="btn-getstarted scrollto" href="index-4.php#login">Go Back</a>



    </div>
  </header><!-- End Header -->



  <main id="main">
    <section id="hero-static" class="hero-static d-flex align-items-center">
      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <h2>Register to <span>VisBoard</span></h2>
        <p>To register, provide us legitimate and correct information about you.</p>
      </div>
    </section>

<section id="free" class="free">
    <div class="wrapper">
            <div class="form-left">
                <h2 class="text-uppercase">INFORMATION GUIDE</h2>
                <p>
                    Please provide real and legitimate information in the registration form.
                </p>
                <p class="text">
                    <span>Note about Username:</span>
                    Username must only be composed of a maximum of 12 alphanumeric characters with no special characters.
                </p>
                <p class="text">
                    <span>Note about Password:</span>
                    Password must only be composed of a maximum of 8 alphanumeric characters.
                </p>
                <p class="text">
                    <span>Reminder:</span>
                    Please review your registration before submitting.
                </p>

            </div>
            <form id="form1" class="form-right" action="register.php" method="post">
                <h2 class="text-uppercase">Create your VisBoard account</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label>First Name</label>
                        <input type="text" name="CustomerFN" id="CustomerFN" class="input-field" required>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label>Last Name</label>
                        <input type="text" name="CustomerLN" id="CustomerLN" class="input-field" required>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 mb-3">
                      <label>Date of Birth</label>
                      <input type="date" class="input-field" id="CBdate" name="CBdate" required>
                  </div>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="input-field" id="Cemail" name="Cemail" required>
                </div>
                <div class="mb-3">
                    <label>Address</label>
                    <input type="text" class="input-field" id="Caddress" name="Caddress" required>
                </div>
                <div class="row">
                  <div class="col-sm-6 mb-3">
                      <label>Username</label>
                      <input type="text" class="input-field" id="CustomerUN" name="CustomerUN" required>
                  </div>
                  <div class="col-sm-6 mb-3">
                      <label>Password</label>
                      <input type="password" name="Cpass" id="Cpass" class="input-field" required>
                  </div>

                </div>


                <div class="row">
                  <div class="mb-3">
                    <label>Select your plan</label>

                  <select class="form-select" type="text" name="Plan" id="Plan" aria-label="Default select example" required>
                    <option class="opt" value="Free" selected>Free Plan</option>
                    <option class="opt" value="Regular" >Regular Plan</option>
                    <option class="opt" value="Premium" >Premium Plan</option>
                    <option class="opt" value="Education" >VisBoard Education</option>
                  </select>
                  </div>
                </div>
                <br />

                <div class="mb-3">
                    <label class="option">I agree to the <a href="#">Terms and Conditions</a>
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-field">
                    <input type="submit" value="Register" id="customer" class="register" name="create">
                </div>

            </form>
        </div>
  </section>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>VisBoard</h3>
              <p>
                98 P. Tuazon <br>
                Quezon City, Philippines<br><br>
                <strong>Phone:</strong> 09613326890 <br>
                <strong>Email:</strong> visboardcsupport@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphics</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Templates</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Portfolio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Logo</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter to receive mails about our products, services and important events</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>HeroBiz</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <!--Google JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

  $(function(){
    $('#customer').click(function(e){

        var valid = this.form.checkValidity();

        if(valid){

          var CustomerFN     = $('#CustomerFN').val();
          var CustomerLN      = $('#CustomerLN').val();
          var CBdate         = $('#CBdate').val();
          var Cemail         = $('#Cemail').val();
          var Caddress           = $('#Caddress').val();
          var CustomerUN      = $('#CustomerUN').val();
          var Cpass      = $('#Cpass').val();
          var Plan      = $('#Plan').val();

          e.preventDefault();


          $.ajax({
            type: 'POST',
            url: 'process-register.php',
            data: {CustomerFN: CustomerFN,CustomerLN: CustomerLN, CBdate: CBdate, Cemail:Cemail, Caddress:Caddress, CustomerUN: CustomerUN,Cpass: Cpass,Plan: Plan, },
            success: function(data){
              Swal.fire({
                title: "Welcome to VisBoard " + CustomerUN,
                text: "Your account has been registered.",
                icon: "success"
              }).then(function() {
                      window.location = "index-4.php#login";
                  });

            },
            error: function(data){
              Swal.fire({
                title: "Error",
                text: "An error occur while saving the entry",
                icon: "error"
              })

            },

          });

        }else{

        }



    });

});




</script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>
