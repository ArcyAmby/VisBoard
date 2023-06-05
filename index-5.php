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

	<title>VisBoard/Home</title>
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

  <?php
    $id = $_SESSION['user'];
    $sql = $db->prepare("SELECT * FROM `customer` WHERE `CustomerID`='$id'");
    $sql->execute();
    $fetch = $sql->fetch();

  ?>





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
          <li><a class="nav-link scrollto" href="index-5.html#templates">Templates</a></li>
          <li><a href="graphics.html">Graphics</a></li>
          <li><a href="logo.html">Logo</a></li>
          <li><a href="photos.html">Photos</a></li>
          <li><a href="designer.php">Designers</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
      <div class="container">
        <div class="row justify-content-center gy-6">

          <div class="col-lg-5 col-md-8">
            <img src="assets/img/hero-carousel/hero-carousel-1.svg" alt="" class="img-fluid img">
          </div>

          <div class="col-lg-9 text-center">
            <h2>Welcome <?php echo $fetch['CustomerFN']." ". $fetch['CustomerLN']?></h2>
            <p>Your VisBoard account is active now. Enoy our features and many more while browsing your newsfeed.</p>
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
            <h2>Enjoy templates, graphics, photos, logos and many more</h2>
            <p> VisBoard is also equipped with experts from web technology, business, advertising, media, and graphics. These professionals will integrate efficient web technologies, analyze business trends, spot market volatility, plan strategic advertisements, and thoroughly filter Page 26 of 29 the designs and its designers. VisBoard has the strategic people to fuel the best services and drive the company to its goals..</p>
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
            <h2>TInnovation in Graphic Design Industry</h2>
            <p>Enjoy innovation ideas in technology applications in graphic design.</p>
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

  <main id="main">


    <br />



		<section id="designer-sec" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Are you an aspiring Graphic Designer who wants to feature your <em>Portfolio</em>?</h3>
            <p>VisBoard is the right place for you to feature your graphic works to potential clients and customers.</p>
            <a class="btn-apply align-self-start" href="d-register.php">Apply as a Freelance Graphic Designer</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/cta2.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->

		<section id="onfocus" class="onfocus">
			<div class="container-fluid p-0" data-aos="fade-up">

				<div class="row g-0">
					<div class="col-lg-6 video-play position-relative">
						<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
					</div>
					<div class="col-lg-6">
						<div class="content d-flex flex-column justify-content-center h-100">
							<h3>Watch our advertising video</h3>
							<p class="fst-italic">
								We discover that video presentation is one of the fastest and most effective way to gather customer's attention.
								Please spare us a couple of minutes to watch our video. The following are the content of the video:
							</p>
							<ul>
								<li><i class="bi bi-check-circle"></i> Brief information about our products and services.</li>
								<li><i class="bi bi-check-circle"></i> Functionality of our website.</li>
								<li><i class="bi bi-check-circle"></i> Connection to database, maintenance and administrative control.</li>
							</ul>
							<a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>

			</div>
		</section>


		<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>We offer useful, meaningful, and functional visuals using various means of technology.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Templates</h3>
                </a>
                <p>Enjoy over a thousand downloadable pre-made templates such as business documents, powerpoint presentation etc.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Contact Designers</h3>
                </a>
                <p>Want a customized template, graphics or logo for your business? We offers a platform for designers and customers to communicate.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Photos</h3>
                </a>
                <p>Download over a thousand of high quality images from different sources.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Graphics</h3>
                </a>
                <p>Elevate your business image with pre-made graphics for your overall needs</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-5.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Logo</h3>
                </a>
                <p>Communicate better with your audience and customer by downloading the right logo for you.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services-6.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Designer Portfolio</h3>
                </a>
                <p>Are you an aspiring designer? We offer the right platform for you to introduce your portfolio to clients.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->






    <!-- ======= Templates Section ======= -->
    <section id="templates" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>Templates</h2>
          <p>Enjoy over a thousand downloadable pre-made templates such as business documents, powerpoint presentation etc.</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-ppt">Powerpoint Presentations</li>
            <li data-filter=".filter-busdoc">Business Documents</li>
            <li data-filter=".filter-busplan">Business Plans</li>
            <li data-filter=".filter-cal">Calendars</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 portfolio-container">

						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-ppt">
              <img src="assets/img/portfolio/Templates/ppt-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Powerpoint 1</h4>
                <a href="assets/img/portfolio/Templates/ppt-1.jpg" title="ppt 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-ppt">
              <img src="assets/img/portfolio/Templates/ppt-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Powerpoint 2/h4>
                <a href="assets/img/portfolio/Templates/ppt-2.jpg" title="ppt 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-ppt">
              <img src="assets/img/portfolio/Templates/ppt-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Powerpoint 3</h4>
                <a href="assets/img/portfolio/Templates/ppt-3.jpg" title="ppt 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-ppt">
              <img src="assets/img/portfolio/Templates/ppt-4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Powerpoint 4</h4>
                <a href="assets/img/portfolio/Templates/ppt-4.png" title="ppt 4" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-ppt">
              <img src="assets/img/portfolio/Templates/ppt-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Powerpoint 5</h4>
                <a href="assets/img/portfolio/Templates/ppt-5.jpg" title="ppt 5" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-ppt">
              <img src="assets/img/portfolio/Templates/ppt-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Powerpoint 6</h4>
                <a href="assets/img/portfolio/Templates/ppt-6.jpg" title="ppt 6" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->


						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busdoc">
              <img src="assets/img/portfolio/Templates/busdoc-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Business Document 1</h4>
                <a href="assets/img/portfolio/Templates/busdoc-1.jpg" title="busdoc 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busdoc">
							<img src="assets/img/portfolio/Templates/busdoc-2.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Business Document 2</h4>
								<a href="assets/img/portfolio/Templates/busdoc-2.jpg" title="busdoc 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busdoc">
							<img src="assets/img/portfolio/Templates/busdoc-3.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Business Document 3</h4>
								<a href="assets/img/portfolio/Templates/busdoc-3.jpg" title="busdoc 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busdoc">
							<img src="assets/img/portfolio/Templates/busdoc-4.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Business Document 4</h4>
								<a href="assets/img/portfolio/Templates/busdoc-4.jpg" title="busdoc 4" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busdoc">
							<img src="assets/img/portfolio/Templates/busdoc-5.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Business Document 5</h4>
								<a href="assets/img/portfolio/Templates/busdoc-5.jpg" title="busdoc 5" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busplan">
							<img src="assets/img/portfolio/Templates/busplan-1.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Business Plan 1</h4>
								<a href="assets/img/portfolio/Templates/busplan-1.jpg" title="busplan 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busplan">
							<img src="assets/img/portfolio/Templates/busplan-2.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Business Plan 2</h4>
								<a href="assets/img/portfolio/Templates/busplan-2.jpg" title="busplan 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->

						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-busplan">
							<img src="assets/img/portfolio/Templates/busplan-3.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Business Plan 3</h4>
								<a href="assets/img/portfolio/Templates/busplan-3.jpg" title="busplan 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->



						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-cal">
							<img src="assets/img/portfolio/Templates/cal-1.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Calendar 1</h4>
								<a href="assets/img/portfolio/Templates/cal-1.jpg" title="cal 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-cal">
							<img src="assets/img/portfolio/Templates/cal-2.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Calendar 2</h4>
								<a href="assets/img/portfolio/Templates/cal-2.jpg" title="cal 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-cal">
							<img src="assets/img/portfolio/Templates/cal-3.png" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Calendar 3</h4>
								<a href="assets/img/portfolio/Templates/cal-3.png" title="cal 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->
						<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-cal">
							<img src="assets/img/portfolio/Templates/cal-4.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Calendar 4</h4>
								<a href="assets/img/portfolio/Templates/cal-4.jpg" title="cal 4" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
								<a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div><!-- End Portfolio Item -->





          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Templates Section -->


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
                    <img src="assets/img/logo1.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?php echo $fetch['CustomerFN']." ". $fetch['CustomerLN']?></h4>
                      <p class="text-secondary mb-1">Current Plan: <?php echo $fetch['Plan']?></p>
                      <p class="text-muted font-size-sm"><?php echo $fetch['Caddress']?></p>
                    </div>
                  </div>
                </div>
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
                      <?php echo $fetch['CustomerFN']." ". $fetch['CustomerLN']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['Cemail']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">BirthDate</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['CBdate']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['Caddress']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['CustomerUN']?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary" target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
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
