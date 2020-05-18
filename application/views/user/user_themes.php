<?php
	$profil_web = $this->db->get('profil_web')->row();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
				<!-- Required meta tags -->
		    <meta charset="utf-8">
		    <meta name="author" content="<?php echo $profil_web->nama; ?>">
		    <meta name="description" content="<?php echo $deskripsi!=''?$deskripsi:$profil_web->deskripsi; ?>">
		    <meta name="keywords" content="<?php echo $profil_web->keyword; ?>">
				<meta name="og:image" content="<?php echo $image!=''?base_url($image):base_url($profil_web->logo); ?>"/>
		    <meta http-equiv="x-ua-compatible" content="ie=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="twitter:card" content="summary" />
				<meta name="twitter:site" content="@DiskominfotikSumbawa" />
				<meta name="twitter:title" content="<?php echo $title; ?>" />
				<meta name="twitter:description" content="<?php echo $deskripsi!=''?$deskripsi:$profil_web->deskripsi; ?>" />
				<meta name="twitter:image" content="<?php echo $image!=''?base_url($image):base_url($profil_web->logo); ?>" />
		    <link rel="shortcut icon" href="<?php echo $profil_web->favicon; ?>" />
				<title><?php echo $title; ?> | <?php echo $profil_web->nama; ?></title>

        <!-- Icon css link -->
				<link href="<?php echo base_url(); ?>assets/newbiz/assets/img/favicon.png" rel="icon">
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

			  <!-- Google Fonts -->
			  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

			  <!-- Vendor CSS Files -->
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/vendor/venobox/venobox.css" rel="stylesheet">

			  <!-- Template Main CSS File -->
			  <link href="<?php echo base_url(); ?>assets/newbiz/assets/css/style.css" rel="stylesheet">

    </head>
		<body>

		  <!-- ======= Header ======= -->
		  <header id="header" class="fixed-top">
		    <div class="container">

		      <div class="logo float-left">
		        <!-- Uncomment below if you prefer to use an text logo -->
		        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
		        <a href="#intro" class="scrollto"><img src="<?php echo base_url(); ?>assets/newbiz/assets/img/logo.png" alt="" class="img-fluid"></a>
		      </div>

		      <nav class="main-nav float-right d-none d-lg-block">
		        <ul>
		          <li class="active"><a href="#intro">Home</a></li>
		          <li><a href="#about">About Us</a></li>
		          <li><a href="#services">Services</a></li>
		          <li><a href="#portfolio">Portfolio</a></li>
		          <li><a href="#team">Team</a></li>
		          <li class="drop-down"><a href="">Drop Down</a>
		            <ul>
		              <li><a href="#">Drop Down 1</a></li>
		              <li class="drop-down"><a href="#">Drop Down 2</a>
		                <ul>
		                  <li><a href="#">Deep Drop Down 1</a></li>
		                  <li><a href="#">Deep Drop Down 2</a></li>
		                  <li><a href="#">Deep Drop Down 3</a></li>
		                  <li><a href="#">Deep Drop Down 4</a></li>
		                  <li><a href="#">Deep Drop Down 5</a></li>
		                </ul>
		              </li>
		              <li><a href="#">Drop Down 3</a></li>
		              <li><a href="#">Drop Down 4</a></li>
		              <li><a href="#">Drop Down 5</a></li>
		            </ul>
		          </li>
		          <li><a href="#contact">Contact Us</a></li>
		        </ul>
		      </nav><!-- .main-nav -->

		    </div>
		  </header><!-- #header -->

			<?php echo $content; ?>

		  <!-- ======= Footer ======= -->
		  <footer id="footer">
		    <div class="footer-top">
		      <div class="container">
		        <div class="row">

		          <div class="col-lg-4 col-md-6 footer-info">
		            <h3>NewBiz</h3>
		            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
		          </div>

		          <div class="col-lg-2 col-md-6 footer-links">
		            <h4>Useful Links</h4>
		            <ul>
		              <li><a href="#">Home</a></li>
		              <li><a href="#">About us</a></li>
		              <li><a href="#">Services</a></li>
		              <li><a href="#">Terms of service</a></li>
		              <li><a href="#">Privacy policy</a></li>
		            </ul>
		          </div>

		          <div class="col-lg-3 col-md-6 footer-contact">
		            <h4>Contact Us</h4>
		            <p>
		              A108 Adam Street <br>
		              New York, NY 535022<br>
		              United States <br>
		              <strong>Phone:</strong> +1 5589 55488 55<br>
		              <strong>Email:</strong> info@example.com<br>
		            </p>

		            <div class="social-links">
		              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
		              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
		              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
		              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
		              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
		            </div>

		          </div>

		          <div class="col-lg-3 col-md-6 footer-newsletter">
		            <h4>Our Newsletter</h4>
		            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
		            <form action="" method="post">
		              <input type="email" name="email"><input type="submit" value="Subscribe">
		            </form>
		          </div>

		        </div>
		      </div>
		    </div>

		    <div class="container">
		      <div class="copyright">
		        &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
		      </div>
		      <div class="credits">
		        <!--
		        All the links in the footer should remain intact.
		        You can delete the links only if you purchased the pro version.
		        Licensing information: https://bootstrapmade.com/license/
		        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
		      -->
		        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		      </div>
		    </div>
		  </footer><!-- End Footer -->

		  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

		  <!-- Vendor JS Files -->
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/jquery/jquery.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/php-email-form/validate.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/counterup/counterup.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/mobile-nav/mobile-nav.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/wow/wow.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/vendor/venobox/venobox.min.js"></script>

		  <!-- Template Main JS File -->
		  <script src="<?php echo base_url(); ?>assets/newbiz/assets/js/main.js"></script>

		</body>
</html>
