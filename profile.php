<?php
session_start();
require_once "DB.php";

if(!isset($_SESSION["is_login"]) || $_SESSION["is_login"]!=true || !isset($_SESSION["user"]) || empty($_SESSION["user"])){
    header('Location: /touriosity/login.php');
    exit;
}
$db=new Database;
$user = $db->getUserDetails($_SESSION["user"]["id"]);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>touriosity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/themify-icons.css">
    <link rel="stylesheet" href="./css/nice-select.css">
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/gijgo.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slicknav.css">

    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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



    <div class="container" style="padding-top: 60px;">
        <h1 class="page-header">Edit Profile</h1>
        <div class="row">
            <!-- left column -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="text-center">
                    <?php
                        if($user != null && $user["profile_picture"]!=null){
                            ?>
                    <img src="<?php echo $user["profile_picture"]?>" class="avatar img-circle img-thumbnail"
                        alt="<?php echo $user["username"]?>">
                    <?php
                        }else{
                        ?>
                    <img src="./uploads/default.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
                    <?php
                        }
                    ?>
                    <h6>Upload a different photo...</h6>
                    <form method="post" action="./profile_save.php" enctype="multipart/form-data">
                        <input type="file" class="text-center center-block well well-sm" name="profile_image">
                        <input class="btn btn-primary" name="profile_image_upload" value="Upload" type="submit">
                    </form>
                </div>

                <div class="social_links d-none d-xl-block" style="margin-top: 30%; margin-bottom: 10%;">
                <form method="post" action="./profile_save.php">
                         <input type="submit" value="Delete Profile" name="delete" class="login-btn"></form>
                </div>

            </div>
            <!-- edit form column -->
            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                <?php require_once "alert.php";?>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Basic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Personal</a>
                    </li>
                    
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row" >
                          <div class="col-md-12 col-sm-12 col-xs-12" style=" padding-left:4%;">
                          <h3 style="padding-top: 10px;">Basic Info</h3>
                        <form class="form-horizontal" role="form" method="post" action="./profile_save.php">
                            <div class="form-group">
                                <label class="control-label">Username:</label>
                                <input class="form-control" name="username" value="<?php echo $user["username"]?>" type="text">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email:</label>
                                <input class="form-control" name="email" value="<?php echo $user["email"]?>" type="email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Old Password:</label>
                                <input class="form-control" name="old_pass" type="password">
                            </div>
                            <div class="form-group">
                                <label class="control-label">New Password:</label>
                                <input class="form-control" name="new_pass" type="password">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Confirm password:</label>
                                <input class="form-control" name="c_pass" type="password">
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                    <input class="btn btn-primary" name="basic_update" value="Save Changes" type="submit">
                                    <span></span>
                                    <!-- <input class="btn btn-default" value="Cancel" type="reset"> -->
                                </div>
                            </div>
                        </form>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row" >
                            <div class="col-md-12 col-sm-12 col-xs-12" style=" padding-left:4%;">
                            <h3 style="padding-top: 10px;">Personal info</h3>
                            <form class="form-horizontal" role="form" method="post" action="./profile_save.php">
                                <div class="form-group">
                                    <label class="control-label">First name:</label>
                                    <input class="form-control" name="fname" value="<?php echo $user["first_name"]?>" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Last name:</label>
                                    <input class="form-control" name="lname" value="<?php echo $user["last_name"]?>" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Gender:</label>
                                    <label><input type="radio" name="gender" id="gender"
												value="male" <?php if(strtolower($user["gender"])=="male") echo "checked" ?>/> Male</label>
                                    <label><input type="radio" name="gender" id="gender"
                                            value="female" <?php if(strtolower($user["gender"])=="female") echo "checked" ?>/> Female</label>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">Date of Birth:</label>
                                    <input class="form-control" name="dob" value="<?php echo $user["date_of_birth"]?>" type="text" id="datepicker" readonly>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">Phone Number:</label>
                                    <input class="form-control" name="tel" value="<?php echo $user["phone_number"]?>" type="tel">
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" name="personal_update" value="Save Changes" type="submit">
                                        <span></span>
                                        <!-- <input class="btn btn-default" value="Cancel" type="reset"> -->
                                    </div>
                                </div>
                            </form>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
    <script src="./js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="./js/ajax-form.js"></script>
    <script src="./js/waypoints.min.js"></script>
    <script src="./js/jquery.counterup.min.js"></script>
    <script src="./js/imagesloaded.pkgd.min.js"></script>
    <script src="./js/scrollIt.js"></script>
    <script src="./js/jquery.scrollUp.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/jquery-ui.min.js"> </script>
    <script src="./js/nice-select.min.js"></script>
    <script src="./js/jquery.slicknav.min.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/range.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="./js/slick.min.js"></script>



    <!--contact js-->
    <script src="./js/contact.js"></script>
    <script src="./js/jquery.ajaxchimp.min.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/mail-script.js"></script>


    <script src="./js/main.js"></script>
    <script>
        $('#datepicker').datepicker({dateFormat: "yy-mm-dd"});
    </script>
    </script>

</body>

</html>