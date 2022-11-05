<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>feeds</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo">
				<a href="index.php">
					<span class="img" style="background-image: url(images/author.jpg);">		
				</span><?php echo $_SESSION['username']; ?></a></h1>

			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="feeds.php">Feeds</a></li>
					<li><a href="index.php">Home</a></li>
					<li><a href="collection.php">Collection</a></li>
					<li><a href="services.php">My Services</a></li>
					<li><a href="contact.php">Contacts</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<h1 class="bread"><big>S</big>hutter Square</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row">

	    			<div class="col-lg-8 ftco-animate">
	            <h2 class="mb-3 font-weight-bold">Username</h2>
	            <p>description</p>
	            <p>
	              <img src="images/image_1.jpg" alt="" class="img-fluid">
	            </p>
	            <h2 class="mb-3 mt-5 font-weight-bold">Username</h2>
	            <p>description</p>
	            <p>
	              <img src="images/image_2.jpg" alt="" class="img-fluid">
	            </p>
	            <h2 class="mb-3 font-weight-bold">Username</h2>
	            <p>description</p>
	            <p>
	              <img src="images/image_4.jpg" alt="" class="img-fluid">
	            </p>
	            <h2 class="mb-3 font-weight-bold">Username</h2>
	            <p>description</p>
	            <p>
	              <img src="images/image_3.jpg" alt="" class="img-fluid">
	            </p>
	      

	          </div> <!-- .col-md-8 -->
	    			<div class="col-lg-4 sidebar ftco-animate bg-light">
	            <div class="sidebar-box">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Categories</h3>
	              <ul class="categories">
	                <li><a href="#">Fashion </a></li>
	                <li><a href="#">Technology </a></li>
	                <li><a href="#">Travel </a></li>
	                <li><a href="#">Food </a></li>
	                <li><a href="#">Photography </a></li>
	              </ul>
	            </div>

	              
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>