<?php
require_once('config.php');
session_start();

	if(!ISSET($_SESSION['user'])){
		header('designer-login.php');
	}
?>












<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>VisBoard/Designer Account</title>
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

<?php
  $id = $_SESSION['user'];
  $sql = $db->prepare("SELECT * FROM `designer` WHERE `DesignerID`='$id'");
  $sql->execute();
  $fetch = $sql->fetch();

?>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index-5.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="visboard-logo">
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a href="designer-account.html">Newsfeed</a></li>
          <li><a href="designer.html">Designers</a></li>
          <li class="dropdown"><a href="#"><span>Option</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="designer-account.php#inbox">Inbox</a></li>
              <li><a href="designer-account.php#commission">Commission</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Help</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Report a problem</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Transactions</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn btn-danger" href="dlogout.php">Log out</a>

    </div>
  </header><!-- End Header -->



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="assets/img/hero-carousel/hero-carousel-1.svg" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Welcome <?php echo $fetch['DesignerFN']." ". $fetch['DesignerLN']?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="assets/img/hero-carousel/hero-carousel-2.svg" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>At vero eos et accusamus</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="assets/img/hero-carousel/hero-carousel-3.svg" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Temporibus autem quibusdam</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
          </div>

        </div>
      </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </section><!-- End Hero Section -->


	<section id="commission" class="free">
		<div class="section-header">
		<br />
		<br />
		<br />
		<br />



		</div>
</section>


  <main id="main">
		<div class="section-header">
			<h2>Your Inbox</h2>


		</div>
	<div class="container" id="inbox">
  <table class="table">
    <thead>
      <tr>
        <th>Customer ID</th>
        <th>Customer Email</th>
        <th>Subject</th>
				<th>Message</th>
      </tr>
    </thead>
    <tbody>


				<?php

								$commdemail = $fetch['Demail'];


								$sql2 = "SELECT * FROM `request` WHERE `CommDemail` = '$commdemail'";
								$query = $db->prepare($sql2);
		            $query->execute();

		while($fetch = $query->fetch()){
?>


			<tr>
				<td><?php echo $fetch['CustomerID']?></td>
				<td><?php echo $fetch['CommEmail']?></td>
				<td><?php echo $fetch['Subject']?></td>
				<td><?php echo $fetch['Message']?></td>
			</tr>




<?php
		}

?></tbody>
</table>
</div>





    <section id="commission" class="free">
      <div class="section-header">
  			<h2>Commission Form</h2>


  		</div>
        <div class="wrapper">
					<form class="form-right" action="designer-account.php" method="post">
		          <div class="section1">
		          <h2 class="text-uppercase">Transaction Information</h2>

		          <div class="row">
		              <div class="col-sm-6 mb-3">
		                  <label>Transanction Date</label>
		                  <input type="date" name="TranDate" id="TransDate" class="input-field" value="<?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d'); ?>"required>
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

    <section id="profile">
      <div class="section-header">
  			<h2>Account Profile</h2>


  		</div>
    <div class="container">
      <div class="main-body">


            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4><?php echo $fetch['DesignerFN']." ". $fetch['DesignerLN']?></h4>
                        <p class="text-secondary mb-1">VisBoard Freelance Designer</p>
                        <p class="text-muted font-size-sm"><?php echo $fetch['Daddress']?></p>
                        <button class="btn btn-primary">Follow</button>
                        <button class="btn btn-outline-primary">Message</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                      <span class="text-secondary">https://bootdey.com</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                      <span class="text-secondary">@bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['DesignerFN']." ". $fetch['DesignerLN']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Demail']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Daddress']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">BirthDate</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['DesignerBD']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Username</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['DesignerUN']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Undergraduate School</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Undergrad']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Undergraduate Program</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Program']?> (<?php echo $fetch['UnderYr']?>)
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Company 1</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Employ1']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Position</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Pos1']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Company 2</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Employ2']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Position</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php echo $fetch['Pos2']?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row gutters-sm">
                  <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Project 1:</i>Kimberley Template</h6>
                        <small>Web Design</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Website Markup</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>One Page</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Mobile Template</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Backend API</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Project 2</i>Adobe Website Graphics</h6>
                        <small>Web Design</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Website Markup</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>One Page</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Mobile Template</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Backend API</small>
                        <div class="progress mb-3" style="height: 5px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>

          </div>
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
		$('#submit').click(function(e){

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
