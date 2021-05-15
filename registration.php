<?php
session_start();
?>

<!Doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration Form</title>
	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">

	
    <link rel="stylesheet" href="css/jquery-ui.css">

	<link rel="stylesheet" href="css/style.css">

	<!--Custom styles-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="registration.css">
</head>

<body>

	<!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/Touriosity2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">Home</a></li>
                                            <li><a class="" href="contact.php">Contact</a></l/li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="social_links d-none d-xl-block">
                                        <?php
                                        if(isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])){
                                            echo '<a href="profile.php"> <p> Hi! '.$_SESSION["user"]["username"].'</p> </a> <form method="post" action="./login_submit.php"><input type="submit" value="Logout" name="logout" class="login-btn"></form>';
                                        }else{
                                            echo '<a href="login.php"> <button type="button" class="login-btn" style="cursor:pointer">Login</button></a>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

	<!-- bradcam_area  -->
	<div class="bradcam_area bradcam_bg_2">
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="card">
					<div class="card-header">
						<h3>Register</h3>
					</div>
					<div class="card-body" style="padding-bottom: 0;">
						<form method="post" action="./registration_submit.php">
							<?php require_once "alert.php";?>
							<div class="row">
								<div class="col-md-4"><label class="firstname">First Name : </label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="text" name="fname" id="fname" placeholder="Enter your First Name"
											class="form-control">
									</div>
								</div>

								<div class="col-md-4"><label class="firstname">Last Name : </label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="text" name="lname" id="lname" placeholder="Enter your Last Name"
											class="form-control">
									</div>
								</div>

								<div class="col-md-4"><label class="firstname">Username : </label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="text" name="username" id="username" placeholder="Enter your Username"
											class="form-control">
									</div>
								</div>

								<div class="col-md-4"><label class="mail">Email :</label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="email" name="email" id="email" placeholder="Enter your email"
											class="form-control">
									</div>
								</div>

								<div class="col-md-4"><label class="pass">Password :</label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="password" name="password" id="password"
											placeholder="Enter your password" class="form-control">
									</div>
								</div>

								<div class="col-md-4"><label class="pass">Confirm Password :</label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="password" name="cpassword" id="password"
											placeholder="Enter password again" class="form-control">
									</div>
								</div>

								<div class="col-md-4"><label class="pass">Phone No :</label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="tel" name="tel" id="tel"
											placeholder="Enter your phone number" class="form-control">
									</div>
								</div>

								<div class="col-md-4"><label class="dob">Birth Date: </label></div>
								<div class="col-md-8">
									<div class="form-group">
										<input id="datepicker" type="text" name="dob" id="dob" placeholder="Enter your Date of Birth"
											class="form-control " readonly>
									</div>
								</div>

								<div class="col-md-4"><label class="gender">Gender : </label></div>
								<div class="col-md-8">
									<div class="form-group">
										<label style="color: white;"><input type="radio" name="gender" id="gender"
												value="male" /> Male</label>
										<label style="color: white;"><input type="radio" name="gender" id="gender"
												value="female" /> Female</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Submit" name="submit" class="btn btn btn-warning float-right">
							</div>
						</form>
					</div>
					<div class="card-footer" style="padding: 0;">
						<div class="d-flex justify-content-center links" style="color: white;">
							Already have an account?&nbsp;<a class="login-btn-links" href="login.php"
								style="color: #00ffff;">Sign in</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ bradcam_area  -->

	<!-- footer_area  -->
	<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo2.png" alt="">
                                </a>
                            </div>
                            <p>University of Asia Pacific <br> 74/A, Green Road, Dhaka - 1205, Bangladesh<br>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                FAQ
                            </h3>
                            <ul class="links">
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="sajek.php">Sajek</a></li>
                                <li><a href="coxsbazar.php">Cox's Bazar</a></li>
                                <li><a href="srimongol.php">Sreemangal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/sajek/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/srimongol/7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/cox/4.jpg" alt="">
                                    </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



	<!-- JS here -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/ajax-form.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/scrollIt.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery-ui.min.js"> </script>
	<script src="js/nice-select.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/range.js"></script>
	<!-- <script src="js/gijgo.min.js"></script> -->
	<script src="js/slick.min.js"></script>



	<!--contact js-->
	<script src="js/contact.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>


	<script src="js/main.js"></script>
	<script>
		$('#datepicker').datepicker({dateFormat: "yy-mm-dd"});
	</script>
	</script>
</body>

</html>