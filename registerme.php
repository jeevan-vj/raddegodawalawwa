<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Raddegoda Walawwa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" id="r-color-roller" href="assets/color-files/color-08.css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<?php 

		require("config.php");

		$username = $password = $confirmpassword = $email = "";
		$isSuccess = true;
		$usernameError = $passwordError = $emailError = $passwordMismatchError = "";

		if($_SERVER["REQUEST_METHOD"]== "POST"){
		
			$username = $_POST["username"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirmpassword = $_POST["confirmpassword"];

			if(empty($username)){
				$usernameError = "Invalid User Name.";
				$isSuccess = false;
			}
			if(empty($password)){
				$passwordError = "Invalid Password.";
				$isSuccess = false;
			}	
			if(empty($email)){
				$emailError = "Invalid Email.";
				$isSuccess = false;
			}
			if($password != $confirmpassword){
				$isSuccess = false;
				$passwordMismatchError = "Password mismatch!..";
			}
			$insertSql = "INSERT INTO Users(username,email,password) Values('$username','$email','$password')";

			if ($isSuccess) {
				$insertQuery = mysqli_query($GLOBALS['db'], $insertSql);

				if ($insertQuery) {
					// TODO Redirect to login
					echo "<script>	alert('Record inserted');	</script>";
				}
			}
			
	}

	?>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p class="site">www.raddegodawalawwa1@gmail.com</p>
						</div>
						<div class="col-xs-8 text-right">
							<p class="num">Call: +374937773</p>
							<ul class="colorlib-social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			 <div class="main-nav" id="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
              <h1><img class="img-responsive" src="images/lg4.png" alt="logo" width="115"></h1>
          </a>                    
        </div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html"> </a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li>
									<a href="rooms-suites.html">Rooms</a>
									
								</li>
								<li><a href="dining-bar.html">Dining &amp; Bar</a></li>
								<li><a href="aminities.html">Aminities</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="test.html">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/room-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		 <section id="r-login-register">
          <div class="r-login-register">
            <div class="r-login-register-in">
         <div class="r-auth-outer r-register">
                  <div class="r-auth-head">
                    <h2><b>Register</b> Now</h2>
                    <span>Required information for account creation</span>
                  </div>
                  <div class="r-auth-form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                      <div class="form-group">
												<input type="text" required class="form-control" placeholder="User name" name="username"> 
												<span class="input-error"><?php echo $usernameError; ?></span>
                      </div>
                      <div class="form-group">
												<input type="password" required class="form-control" placeholder="Password" name="password">
												<span class="input-error"><?php echo $passwordError; ?></span>
                      </div>
                      <div class="form-group">
                        <input type="password" required class="form-control" placeholder="Confirm Password" name="confirmpassword">
												<span class="input-error"><?php echo $passwordMismatchError; ?></span>
											</div>
                      <div class="form-group">
                        <input type="email" required class="form-control" placeholder="Email Address" name="email">
												<span class="input-error"><?php echo $emailError; ?></span>
											</div>
                      <div class="form-group">
                        <img src="assets/images/recaptcha.jpg" class="img-fluid d-block m-auto" alt="">
                      </div>
                      <div class="form-group">
                        <input class="btn btn-full" type="submit" name="submit" value="Sign up Now">
                      </div>
                    </form>
                  </div>
                   </div>
              </div>
            </div>
          </div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Raddegoda Walawwa</h4>
						<p>Visit to Raddegoda wallawa is a pleasant and unforgettable stay filled with tranquility and a world of experience.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Accomodation</a></li>
								<li><a href="#">Dining &amp; Bar</a></li>
								<li><a href="#">Restaurants</a></li>
								<li><a href="#">Spa</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h4>Recents Blog Post</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
							<li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
							<li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Raddegoda Walawwa Rideegama <br> Kurunegala<br>Sri Lanka</li>
							<li><a href="tel://1234567920">+37 4937773</a></li>
							<li><a href="mailto:info@yoursite.com">info@raddegodawalawwa.lk</a></li>
							<li><a href="http://luxehotel.com">www.raddegodawalawwa1@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</small> 
							<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

