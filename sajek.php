<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Touriosity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.png"> -->
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

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        .img-style{width: 100%;height: 400px;padding-bottom: 2%;}
        .p-style{text-align:justify}
        .h2-style{text-align:left}
        ul.ul-style, ul.ul-style li{width:100%;float:left:position:relative;text-align:left}
        ul.ul-style li{list-style:disc}
    </style>
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

    <div class="container"><div class="row"><div class="col-md-12" style="text-align:center">
    <div class="div1" style="padding: 3% 0">
        <h1 class="text1">SAJEK VALLEY</h1>

        <img src="img/sajek/2.jpg" alt="long" class="img-style">
        <h2 class="h2-style">Description:</h2>
        <p class="p-style">Sajek valley is one of the topmost tourist destinations in Bangladesh. The Valley is located among the hills
            of Kasalong range of Baghaichhari Upazila in Rangamati District.Sajek valley is 80 km away from Khagrachari
            town and 90 km northwest from Rangamati town. It is only 8 km away from Mizoram, India. This place is about
            1800 feet above the sea level.The name Sajek has come from the name of Sajek River which is flowing as a
            border between Bangladesh & India. It is known as the 'Queen of Hills' and 'Roof of Rangamati'.As the deep
            clouds & sudden rain on the valley is the key attraction,so the rainy season is the best time to travel
            Sajek Valley. It’s lush green, scenic beauty of hills, wilderness, the opportunity of playing with clouds
            attract the tourist to come here. To enjoy its natural beauty every day thousands of the tourists come here.
        </p>

        <?php
            if(isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])){
                ?>
                <h2 class="h2-style">Tourist Attraction</h2>
        <h3 class="h2-style">The Route of Sajek Valley</h3>
        <img src="img/sajek/3.jpg" alt="long" class="img-style">
        <p class="p-style">This road will give you one of your life’s most memorable journeys. The serpentine road through the hills is
            enchanting. In some places, these roads are too high on the hills that when the vehicles start to ascend
            you’ll feel the lower part of your body start disconnecting from the upper part. After a while when the
            vehicle goes down from the upper hill, you’ll experience the opposite feeling. After continuous ups and
            downs, at last, you’ll arrive at Sajek Valley</p>
        
        <h3 class="h2-style">Sikam Toisa Water Fall</h3>
        <img src="img/sajek/4.jpg" alt="long" class="img-style">
        <p class="p-style">Also known as Komlok Waterfall or Pidam Toisa Waterfall, this waterfall is really difficult to reach. A steep
            hilly road on the right side of Ruilui Para- Helipad road leads to this waterfall. You have to trek very
            steep hilly road, somewhere 80-85 degrees to reach there. Inexperienced and bulky people are requested to
            avoid this waterfall but if you have experience of trekking hills and if you love to explore then this
            wonderful waterfall is for you.</p>
        
        <h3 class="h2-style">Sunrise in The hills</h3>
        <img src="img/sajek/5.jpg" alt="long" class="img-style">
        <p class="p-style">Another thing that will mesmerize you here is the sunrise. Get up early to experience the wonderful sunrise.
            As the hills are covered with clouds, when the sun rise it may seem that it is coming out of cloud. When the
            sun comes out of the cloud completely and shines all over valleys you will feel a heavenly feeling. Just
            close your eyes, keep calm and quiet, take long breath and feel the whole phenomenon. I’m sure that you will
            think life is beautiful.</p>

        <h3 class="h2-style">Sunset from The Helipad</h3>
        <img src="img/sajek/6.jpg" alt="long" class="img-style">
        <p class="p-style">There is a helipad on the valley and you can enjoy the red glow of setting sun from this place. Lots of
            tourists come here to enjoy this natural phenomenon. They walk, gossip, take photos and sing loudly here.
            Sometimes tourists pass time here even after sunset. Standing at the edge of the mountain for a long time
            they enjoy the surrounding nature.</p>

        <h3 class="h2-style">Beautiful Cloud View</h3>
        <img src="img/sajek/7.jpg" alt="paris" class="img-style">
        <p class="p-style">If you wish to be embraced by clouds and practice the clouds, then Sajek natural depression is that the best
            place to meet your aspiration. This little and secluded natural depression is enclosed by inexperienced
            mountains, dense forest and zigzag and ups and downs mountainous roads, that check huge snake spirals. Its
            tranquil and peaceful atmosphere can provide you with the sensation of heaven on earth. The
            attention-grabbing issue is that once awakening from sleep within the morning, you may end up amidst cloud.
            where you look, you may solely see white thick clouds and since of it, you can't see what's beneath the
            natural depression. it's going to appear to you that you simply area unit floating on the cloud. as a result
            of its scenic beauty, it's referred to as Quenn of Hills. it's additionally referred to as Roof of Rangamati
            as a result of on prime of this natural depression, you'll see the total Rangamati district.</p>

        <h2 class="h2-style">How to Go:</h2>
        <p class="p-style">The valley is mainly in Rangamati District, but it would be easy for the tourists to reach there from
            Khagrachhari. The route is Khagrachhari – Dighinala Bazaar – Bagaihat Bazaar – Machalong Haat – and then
            Sajek. It is around 75 km from Khagrachhari. The distance between Dighinala and Sajek is 52 km. Main
            transportation of that area is Chander Gari. It will cost around Tk. 6000-Tk. 8000/- from Khagrachhari. It
            is like a four wheel jeep. Sometimes visitors can take some tea break on the way at Haat. From Dighinala,
            travelers can hire motor bike. It may cost Tk. 1000-Tk. 1500/- up-down. The region is extremely backward.
        </p>

        <h2 class="h2-style">Transportation</h2>
        <h4 class="h2-style"><b>Dhaka to Khagrachari Bus Service</b></h4>
        <table class="table table-bordered">
            <tr>
                <th>Bus Name</th>
                <th>Ticket Catagory</th>
                <th>Price(BDT)</th>
                <th>Contact</th>
                <th>Starting Time</th>
            </tr>
            <tr>
                <td> Hanif Paribahan </td>
                <td> Volvo Business Class </td>
                <td> 1000 </td>
                <td> 01190-806447 </td>
                <td> 8:30am,10:45pm </td>
            </tr>
            <tr>
                <td>S Alam Paribahan </td>
                <td> Business Class </td>
                <td> 620 </td>
                <td> 02-9331864 </td>
                <td> 8:00am,10:15pm </td>

            </tr>
            <tr>
                <td> Shamoli Paribahan </td>
                <td> Non AC </td>
                <td> 530 </td>
                <td> 02-7193910 </td>
                <td> 9:00am </td>

            </tr>

        </table>

        <h2 class="h2-style">Staying Details</h2>
        <h4 class="h2-style"><b>Hotel/Resort/Cottage List</b></h4>

        <table class="table table-bordered">
            <tr>
                <th>Hotel/Resort/Cottage Name</th>
                <th>Price(Avg/Night)</th>
                <th>Contact No.</th>
                <th>Address</th>
                <th>Map</th>

            </tr>
            <tr>
                <td> Hill cottage sajek hotel </td>
                <td>BDT 5000</td>
                <td> 01862-019461 </td>
                <td>Dighinala - Sajek Rd, Sajek</td>
                <td><a href="http://www.google.com/maps/place/23.381975,92.294339">Click Here</a></td>

            </tr>
            <tr>
                <td>Megh Kabbo Hilltop Cottage </td>
                <td>BDT 3050</td>
                <td>01852-292688</td>
                <td> Ruiluipara Tourist Zone, Sazek Valley,<br/>Baghaichari Rangamati, Rangamati Bangladesh</td>
                <td><a href="http://www.google.com/maps/place/23.387048,92.289775">Click Here</a></td>
            </tr>
            <tr>
                <td> Sajek Hill View Resort </td>
                <td> BDT 1050</td>
                <td>01878-745843 </td>
                <td>Sajek</td>
                <td><a href="http://www.google.com/maps/place/23.386710,92.290790">Click Here</a></td>
            </tr>
            <tr>
                <td> Lushai Cottage TGB</td>
                <td>BDT 1500 </td>
                <td>01634-198005 </td>
                <td> Ruluipara,Sajek</td>
                <td><a href="http://www.google.com/maps/place/23.383383,92.293576">Click Here</a></td>
            </tr>

        </table>

        <h2 class="h2-style">Local Food & Drinks</h2>
        <p class="p-style">There is no signature food that can be enjoyed by the tourists here. Chickens and vegetables are available.
            Tourists can enjoy pork but don’t expect beef here. There are some halal restaurants for the Muslims. Cakes,
            biscuits and other snacks are a bit costly here.There are coffee shops here and they make coffee really
            nice. Tourist can enjoy the brewing coffee and recharge themselves for trekking hills.</p>

        <h2 class="h2-style">Best Time for Travelling</h2>
        <p class="p-style">Sajek is beautiful in all the season. According to the seasons, it gets a new color that is attractive and
            exceptional. So, it is no matter if you are going in the Summer, or Winter, you will get a new taste of
            Sajek. But in the Rainy, Autumn, and Late autumn, you will feel the white clouds very closely. So, it is
            considered as the best time to visit Sajek Valley.You can visit in the beginning of June and end of
            September.There is no problem if you go another time to travel Sajek.</p>

        <h2 class="h2-style">Tips for Tourist</h2>
        <ul class="ul-style">
            <li>Before going to Sajek, ensure the booking of your room via phone call. It will help you to avoid a
                hassle in the holidays or on-season.</li>
            <li>There is no electricity in Sajek. Though there are the options of Solar Charging, takes longer to charge
                and is not easily available. Good options to keep Power Bank with you.</li>
            <li>In Sajek, there are only available mobile networks including Robi, Airtel, and Teletalk networks.</li>
            <li>The way to go to Sajek is very screwed and high, so this path is dangerous. Beware of traveling in the
                roof of the jeep.</li>
            <li>Take permission for indigenous photographs. Do not take pictures without permission.</li>
            <li>There are security camps in some places on the way of Sajek. They need some information about travelers.
                Cooperate for your safety. Keep a copy of your national identity card.</li>
            <li>If you want to stay more than two or three days, instead of keeping the car with you, just fix the car
                to go. Come back with another vehicle or return to Dighinala by renting another car.</li>
            <li>It is a remote place and hilly areas, so keep necessary items and emergency medicine with you. Do throw
                any chips, packets or waste anywhere of the hilly areas, keep it in the right place. This is our pride,
                so it is our duty to keep neat and clean</li>

        </ul>
                <?php
            }else{
                echo '<a href="login.php"> <button type="button" class="login-btn" style="cursor:pointer">See More</button></a>';
            }
        ?>
    </div>
    </div></div></div>
    

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
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
    </script>
    </script>

</body>

</html>