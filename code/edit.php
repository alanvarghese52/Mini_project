<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>edit</title>
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
			<h1 id="colorlib-logo"><a href="index.php"><span class="img" style="background-image: url(images/author.jpg);"></span><?php echo $_SESSION['username']; ?></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
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
			<section class="ftco-section contact-section">
	      <div class="container">
	        <div class="row block-9">
	          <div class="col-md-6 d-flex">
	            <form action="#" class="bg-light p-5 contact-form">
	              <div class="form-group">
	              	<h1>Edit your profile</h1>
	              	<h6>Your Name</h6>
	                <input type="text" class="form-control" placeholder="name"> 
	              </div>	            
	              <div class="form-group">
	              	<h6>Your email</h6>
	                <input type="email" class="form-control" placeholder="email">
	              </div>	
	              <div class="form-group">
	              	<h6>phone</h6>
	                <input type="text" class="form-control" placeholder="phone">
	              </div> 
	              <div class="form-group">
	              	<h6>address</h6>
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="address"></textarea>
	              </div>
	              <div class="form-group">
	              	<h6>Password</h6>
	                <input type="password" class="form-control" placeholder="password">
	              </div>
	              <div class="form-group">
	              	<h6>Confirm Password</h6>
	                <input type="password" class="form-control" placeholder="confirm pasword">
	              </div>
	               
	              <div class="form-group">
	                <input type="submit" value="Confirm" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </section>
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Recent Photos</h2>
	              <ul class="list-unstyled photo">
	                <li><a href="#" class="img" style="background-image: url(images/image_1.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/image_2.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/image_3.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/image_4.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/image_5.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/image_6.jpg);"></a></li>
	              </ul>
	            </div>
	          </div>
	          
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">Melattur, Malappuram, India</span></li>
		                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9207855783</span></a></li>
		                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">alanvarghese1000@gmail.com</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        
	      </div>
	    </footer>
		</div>
	</div>
	
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