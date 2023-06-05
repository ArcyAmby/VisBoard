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

	<title>VisBoard/Request</title>
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
        <a class="btn btn-danger" href="userlogout.php">Log out</a>



    </div>
  </header><!-- End Header -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">
        <div class="section-header">
          <h2>Communicate with our designers</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>

        <div class="col-lg-8">
              <div class="comments">


                <div class="reply-form">

                  <h4>Request for Commission</h4>
                  <p>Your email address will not be published. Required fields are marked * </p>
                  <form action="">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input name="Demail" id="Demail" type="text" class="form-control" placeholder="Designer email" required>
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
                        <button type="submit" class="btn btn-primary">Post Comment</button>

                      </form>

  </div>
  </div>

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
      </section>


  <main id="main">


  </main>

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
