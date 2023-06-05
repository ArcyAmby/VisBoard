<?php
require_once('config.php');
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VisBoard/Register as designer</title>
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
        <a class="btn-getstarted scrollto" href="index-4.php#designer-sec">Go Back</a>



    </div>
  </header><!-- End Header -->



  <main id="main">

<section id="design" class="design">
    <div class="wrapper">

      <form id="form2" class="form-right" action="d-register.php" method="post">

          <h2 class="text-uppercase">Personal Information</h2>
          <p>
            To register as a graphic designer, please fill up the form below.
          </p>
          <br />

          <div class="row">
              <div class="col-sm-4 mb-3">
                  <label>First Name</label>
                  <input type="text" name="DesignerFN" id="DesignerFN" class="input-field" required>
              </div>
              <div class="col-sm-4 mb-3">
                  <label>Last Name</label>
                  <input type="text" name="DesignerLN" id="DesignerLN" class="input-field" required>
              </div>
              <div class="col-sm-4 mb-3">
                  <label>Birth Date</label>
                  <input type="date" name="DesignerBD" id="DesignerBD" class="input-field" required>
              </div>
          </div>
          <div class="col-sm-6 mb-3">
              <label>Email</label>
              <input type="email" class="input-field" name="Demail" id="Demail" required>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-3">
                <label>Username</label>
                <input type="text" name="DesignerUN" id="DesignerUN" class="input-field" required>
            </div>
            <div class="col-sm-6 mb-3">
                <label>Password</label>
                <input type="password" name="Dpass" id="Dpass" class="input-field" required>
            </div>

          </div>
          <div class="col-sm-8 mb-3">
              <label>Permanent Address</label>
              <input type="text" class="input-field" name="Daddress" id="Daddress" required>
          </div>


          <h2 class="text-uppercase">Educational Background</h2>

          <div class="row">
              <div class="col-sm-6 mb-3">
                  <label>College</label>
                  <input type="text" name="Undergrad" id="Undergrad" class="input-field" required>
              </div>
              <div class="col-sm-6 mb-3">
                  <label>Program</label>
                  <input type="text" name="Program" id="Program" class="input-field" required>
              </div>
          </div>
          <div class="col-sm-4 mb-3">
              <label>Year Graduated</label>
              <input type="number" name="UnderYr" id="UnderYr" class="input-field" required>
          </div>



        <h2 class="text-uppercase">Employment Record</h2>


        <div class="row">
            <div class="col-sm-6 mb-3">
                <label>Company 1</label>
                <input type="text" name="Employ1" id="Employ1" class="input-field" required>
            </div>
            <div class="col-sm-6 mb-3">
                <label>Position</label>
                <input type="text" name="Pos1" id="Pos1" class="input-field" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 mb-3">
                <label>Company 2</label>
                <input type="text" name="Employ2" id="Employ2" class="input-field" required>
            </div>
            <div class="col-sm-6 mb-3">
                <label>Position</label>
                <input type="text" name="Pos2" id="Pos2" class="input-field" required>
            </div>
        </div>



        <h2 class="text-uppercase">Outlook Link of your Portfolio</h2>


        <div class="row">

            <div class="col-sm-8 mb-3">
              <label>Outlook Link</label>
              <input type="text" name="DLink" id="Outlook" class="input-field" required>
            </div>
        </div>
      </br>

      <div class="mb-3">
          <label class="option">I agree to the <a href="#">Terms and Conditions</a>
              <input type="checkbox" checked>
              <span class="checkmark"></span>
          </label>
      </div>
      <div class="mb-3">
          <label class="option">I have read the <a href="#">Rules and Regulations</a>
              <input type="checkbox" checked>
              <span class="checkmark"></span>
          </label>
      </div>

      <div class="form-field">
        <input type="submit" value="Register" id="designer" class="register" name="create">
      </div>


    </form>
  </div>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo 'we here, boys';
}



 ?>

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
    $('#designer').click(function(e){

        var valid = this.form.checkValidity();

        if(valid){

          var DesignerFN     = $('#DesignerFN').val();
          var DesignerLN      = $('#DesignerLN').val();
          var DesignerBD         = $('#DesignerBD').val();
          var Demail         = $('#Demail').val();
          var DesignerUN           = $('#DesignerUN').val();
          var Dpass      = $('#Dpass').val();
          var Daddress      = $('#Daddress').val();
          var Undergrad      = $('#Undergrad').val();
          var Program      = $('#Program').val();
          var UnderYr      = $('#UnderYr').val();
          var Employ1      = $('#Employ1').val();
          var Pos1      = $('#Pos1').val();
          var Employ2      = $('#Employ2').val();
          var Pos2      = $('#Pos2').val();
          var Outlook      = $('#Outlook').val();

          e.preventDefault();


          $.ajax({
            type: 'POST',
            url: 'process-designer.php',
            data: {DesignerFN: DesignerFN,DesignerLN: DesignerLN, DesignerBD: DesignerBD, Demail:Demail, DesignerUN:DesignerUN, Dpass: Dpass,Daddress: Daddress,Undergrad: Undergrad, Program: Program, UnderYr: UnderYr, Employ1: Employ1, Pos1: Pos1, Employ2: Employ2, Pos2: Pos2, Outlook: Outlook,},
            success: function(data){
              Swal.fire({
                title: "Welcome to VisBoard " + DesignerUN,
                text: "Please check your email: " + Demail + " to confirm your registration",
                icon: "info"
              }) .then(function() {
                      window.location = "designer-login.php";
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
