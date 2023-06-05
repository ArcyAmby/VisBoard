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

	<title>VisBoard/Portfolio-Details</title>
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
  $sql = $db->prepare("SELECT * FROM `customer` WHERE `CustomerID`='$id'");
  $sql->execute();
  $fetch = $sql->fetch();

?>
<?php
$num = 13;
$sql1 = $db->prepare("SELECT * FROM `designer` WHERE `DesignerID` = '$num'");
$sql1->execute();
$fetch1 = $sql1->fetch();

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

          <li><a href="index-5.php">Newsfeed</a></li>
          <li><a class="nav-link scrollto" href="index-5.php#templates">Templates</a></li>
          <li><a href="graphics.html">Graphics</a></li>
          <li><a href="logo.html">Logo</a></li>
          <li><a href="photos.html">Photos</a></li>
          <li><a href="designer.php" class="active">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Help</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Report a problem</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="index-5.php#profile"><span>My Account</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index-5.php#profile">Profile</a></li>
              <li><a href="index-5.php#profile">Settings</a></li>
              <li><a href="index-5.php#profile">Subscription</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn btn-danger" href="userlogout.php">Log out</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Designer Portfolio</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-6.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title">Monica Dy</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Do</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                </ul>
              </div><!-- End meta top -->

							<div class="content">
                <p>
                  One of the great things about networking as a graphic designer is that your work speaks for you. You don’t need to sweet-talk potential clients with a poetic cover letter or witty banter. You just need to put your best work, skills, and design experience in front of your target audience.
                </p>

                <p>
                  But how? The same way it’s been done for generations: through a graphic design portfolio. Fortunately, it’s easier than ever to create one.
                </p>

                <blockquote>
                  <p>
                    It used to be that graphic designers had to hand-deliver their one and only giant art portfolio to potential clients for review (and then retrieve it).
                  </p>
                </blockquote>

                <p>
									Today, you need only create a digital graphic design portfolio and send interested parties a link to your portfolio website. You can update it regularly and use SEO keywords to increase the potential for new clients to stumble upon you through a simple Google search.

So, how do you create a pro digital design portfolio that appeals to art directors, creative directors, a creative agency, a digital agency, and key decision makers? Easy!

Check out the following 10 graphic design portfolio examples for inspiration. Follow our checklist to amass your portfolio essentials. Then use free portfolio website templates to design the digital portfolio of your dreams.
                </p>

                <h3>My Background</h3>
                <p>
									From an organizational perspective, you’ll notice there are examples of one scrolling homepage and complete websites with multiple sections. Some are straightforward photography portfolios with little content beyond the design work. Others include case studies, mockups, video, offers for online classes, an ecommerce shop, an about page, or a peek into the design studio. Pay attention to the use of real estate and the names of navigation tabs.

For design inspiration, notice the layout, colors, fonts, and image choices. Black and white, color, bold, soft, full-screen, and thumbnails are all options as you consider your portfolio design for your personal website.

Make notes on what you might like to include in your own portfolio then move on to our designer portfolio checklist.
                </p>
                <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                <h3>Make notes on what you might like to include in your own portfolio then move on to our designer portfolio checklist.</h3>
                <p>
                  For design inspiration, notice the layout, colors, fonts, and image choices. Black and white, color, bold, soft, full-screen, and thumbnails are all options as you consider your portfolio design for your personal website.
                </p>
                <p>
                  The same way it’s been done for generations: through a graphic design portfolio. Fortunately, it’s easier than ever to create one.
                </p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Monica Dy</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Feel free to contact me with my social links. I'm very glad to communicate with you and I hope I can help you with your graphic design needs.
                </p>
              </div>
            </div><!-- End post author -->

          <div class="comments">



            <div class="reply-form">

              <h4>Request for Commission</h4>
              <p>Your email address will not be published. Required fields are marked * </p>
              <form action="blog-details-5.php" method="post">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="CommDemail" id="CommDemail" type="text" class="form-control" placeholder="Designer email" value="<?php echo $fetch1['Demail']?>" required>
                  </div>

                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="CustomerID" id="CustomerID" type="number" class="form-control" placeholder="Your Account ID" value="<?php echo $fetch['CustomerID']?>"required>
                    </div>
                      <div class="col-md-6 form-group">
                        <input name="CommEmail" id="CommEmail" type="email" class="form-control" placeholder="Email" value="<?php echo $fetch['Cemail']?>" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col form-group">
                        <input name="Subject" id="Subject" type="text" class="form-control" placeholder="Your Subject" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col form-group">
                        <textarea name="Message" id="Message" class="form-control" placeholder="Your Message*" required></textarea>
                      </div>
                    </div>
                    <input type="submit" value="Request" class="btn btn-primary" name="request">

                  </form>

</div>

            </div><!-- End blog comments -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">Freelance <span>(25)</span></a></li>
                  <li><a href="#">Resident <span>(12)</span></a></li>
                  <li><a href="#">Photoshop <span>(5)</span></a></li>
                  <li><a href="#">Video  <span>(22)</span></a></li>
                  <li><a href="#">Adobe <span>(8)</span></a></li>
                  <li><a href="#">Template <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Freelance designers on the go</a></h4>
                      <time datetime="2020-01-01">Jul 13, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Mrs. Ferman Adobe Certification</a></h4>
                      <time datetime="2020-01-01">March 12, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Mid-Year Commission sale</a></h4>
                      <time datetime="2020-01-01">Jun 21, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Midlife crisis during pandemic</a></h4>
                      <time datetime="2020-01-01">Jun 12, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">I love you kenneth</a></h4>
                      <time datetime="2020-01-01">Apr 1, 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>HeroBiz</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
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
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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
		$('#request').click(function(e){

				var valid = this.form.checkValidity();

				if(valid){

					var CommDemail     = $('#CommDemail').val();
					var CustomerID      = $('#CustomerID').val();
					var CommEmail         = $('#CommEmail').val();
					var Subject         = $('#Subject').val();
					var Message           = $('#Message').val();

					e.preventDefault();


					$.ajax({
						type: 'POST',
						url: 'process-request.php',
						data: {CommDemail: CommDemail,CustomerID: CustomerID, CommEmail: CommEmail, Subject:Subject, Message:Message, },
						success: function(data){
							Swal.fire({
								title: "Request sent",
								text: "Please wait for the designer's response in your inbox",
								icon: "success"
							}).then(function() {
											window.location = "blog-details.php";
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
