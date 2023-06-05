<?php
require_once('config.php');
session_start();

	if(!ISSET($_SESSION['user'])){
		header('location:index-4.php#login');
	}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>VisBoard/Commission</title>
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
        <a class="btn-getstarted scrollto" href="designer-account.html#designer-sec">Go Back</a>



    </div>
  </header><!-- End Header -->
	<?php
	  $id = $_SESSION['user'];
	  $sql = $db->prepare("SELECT * FROM `designer` WHERE `DesignerID`='$id'");
	  $sql->execute();
	  $fetch = $sql->fetch();


		$date = date('d-m-y');

	?>



  <main id="main">



<section id="designer" class="free">
    <div class="wrapper">
      <form class="form-right">
          <div class="section1">
          <h2 class="text-uppercase">Transaction Information</h2>

          <div class="row">
              <div class="col-sm-6 mb-3">
                  <label>Transanction Date</label>
                  <input type="date" name="TranDate" id="TransDate" class="input-field" value="<?php echo $date ?>"required>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 mb-3">
                  <label>Customer ID</label>
                  <input type="number" name="CustomerID" id="CustomerID" class="input-field" required>
              </div>
              <div class="col-sm-6 mb-3">
                  <label>Customer Name</label>
                  <input type="text" name="CustomerName" id="CustomerName" class="input-field" required>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-3">
                <label>Designer ID</label>
                <input type="number" name="DesignerID" id="DesignerID" class="input-field" value="<?php echo $fetch['DesignerID']?>" required>
            </div>
            <div class="col-sm-6 mb-3">
                <label>Total Amount</label>
                <input type="number" name="TotalAmount" id="TotalAmount" class="input-field" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-3">
              <label>Payment Method</label>

            <select class="form-select" type="text" name="Method" id="Method" aria-label="Default select example">
              <option class="opt" value="gcash" selected>Gcash Payment</option>
              <option class="opt" value="visa" >VISA card</option>
              <option class="opt" value="paymaya" >Paymaya</option>
              <option class="opt" value="razor" >Razor Wallet</option>
            </select>
            </div>
          </div>


      <div class="section4">
      <h2 class="text-uppercase">Outlook Link of the file</h2>
      <p>
        Please input the outlook link where you have uploaded the file.
      </p>
      <br />

      <div class="row">

          <div class="col-sm-6 mb-3">
              <label>Outlook Link</label>
              <input type="text" name="Link" id="Link" class="input-field" required>
          </div>

      </div>
      <br />

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
          <input id="submit" type="submit" value="Submit" class="register" name="create">
      </div>


    </div>
    </form>
  </div>
  </section>


<br />


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

					var TransDate     = $('#TransDate').val();
					var CustomerID      = $('#CustomerID').val();
					var CustomerName         = $('#CustomerName').val();
					var DesignerID         = $('#DesignerID').val();
					var TotalAmount           = $('#TotalAmount').val();
					var Method      = $('#Method').val();
					var Link      = $('#Link').val();

					e.preventDefault();


					$.ajax({
						type: 'POST',
						url: 'process-commission.php',
						data: {TransDate: TransDate,CustomerID: CustomerID, CustomerName: CustomerName, DesignerID:DesignerID, TotalAmount:TotalAmount, Method: Method,Link: Link, },
						success: function(data){
							Swal.fire({
								title: "Transaction Recorded ",
								text: "Click ok to go to transaction page.",
								icon: "success"
							}).then(function() {
											window.location = "designer-account.php#commission";
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
