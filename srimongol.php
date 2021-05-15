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
        <h1 class="text1">SREEMANGAL,SYLHET</h1>

        <img src="img/srimongol/2.jpg" alt="long" class="img-style">
        <h2 class="h2-style">Description:</h2>
        <p class="p-style">Sreemangal, The Tea Capital of Bangladesh, is a picturesque hilly area covered with tea estates, lemon groves
            and pineapple gardens. Miles after miles, Sreemangal Tea Estates form a green carpet on the sloping hills. A
            large portion of world's highest quality tea is grown and exported from Sreemangal, hence it is called the
            tea capital. But there is more to Sreemangal than just tea. Sreemangal is a magical world famous for nature,
            forests and wildlife, which makes it another prime Bangladesh Eco-Tourism Destination. Here it is possible
            to look around and not see another human being.
            Visit Sreemangal for breathtaking views of sloping landscape wrapped with endless tea gardens. The rolling
            plains lie quietly and seemingly untouched in all their splendors. Large rubber gardens and lakes of
            Sreemangal instill a peace and tranquility in this region which attracts visitors from far and away.
        </p>
        <?php
            if(isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])){
                ?>

        <h2 class="h2-style">Tourist Attraction</h2>

        <h3 class="h2-style">Lawachara Rain Forest</h3>
        <img src="img/srimongol/3.jpg" alt="long" class="img-style">
        <p class="p-style"> This major national park is located 8 kilometers east of Sreemangal. The park offers ample trekking
            opportunities through the forest. Over 460 different species of birds, mammals and reptiles live in this
            forest. Mentionable Lawachara rainforest animal species include deer, wild chicken, squirrel, python,
            endangered hoolok gibbons, capped langoor, slow loris, birds, snakes, banana spiders etc. The forest is
            really dense at some places like those of primeval ones. Rumors run that at shady and dark corners sometimes
            big cats like leopards are also seen. However it is very popular destination for bird watching as over 260
            bird species has been recorded here.</p>
        <h3 class="h2-style">Madhabkunda Waterfall</h3>
        <img src="img/srimongol/4.jpg" alt="long" class="img-style">
        <p class="p-style">Standing 200 feet high, located about 60 kilometers from Srimangal is a renowned tourist attraction, the
            Madhabkunda Waterfall. It is one of the highest and largest waterfalls in the whole country. Surrounded by
            big boulders, adjoining streams and forest, this is a perfect picnic place where you can easily spend the
            whole day exploring. It takes around 1-2 hours to reach Madhabkunda from Srimangal.</p>
        <h3 class="h2-style">HumHum Waterfall</h3>
        <img src="img/srimongol/5.jpg" alt="long" class="img-style">
        <p class="p-style">It is the most famous waterfall in Bangladesh. It is situated at Kamalgonj Upozila of Moulvibazar district in
            Sylhet. It is really an amazing tourist place in Sylhet division. The waterfall becomes more attractive with
            it’s surrounding sights. It is a great attraction for the tourist. You should visit here before you die. It
            is really and amazing place.</p>
        <h3 class="h2-style">Shatchari Forest</h3>
        <img src="img/srimongol/6.jpg" alt="long" class="img-style">
        <p class="p-style">Located about 60km southwest of Sreemangal is the 243-hectare Satchari National Park (formerly known as the
            Telepara Forest Reserve). This park is part of a much larger protected region. Although less popular than
            Lawachara, it is a superb slab of tropical forest with a higher diversity of plants and animals than
            Lawachara, and with far less human disturbance. There are a number of marked walking trails, several
            streams, a population of hoolock gibbons, fishing cats, Phayre’s langur, jungle fowl, pygmy woodpeckers and
            oriental pied horn-bills can be seen here.</p>
        <h3 class="h2-style">Madhabpur Lake</h3>
        <img src="img/srimongol/7.jpg" alt="paris" class="img-style" class="center">
        <p class="p-style">Near the village of the Kashia’s, you will find a natural lake inside Madhabpur tea estate. Clear, calm
            waters and vast carpets of purple lotus flowers and lilies extend beyond your perspective and will certainly
            charm you. Truly an ideal place for photographers, a delight for bird watchers during winter in other
            countries when migratory birds come to the lake, or simply a welcome retreat from the busy city life while
            taking in the amazing sunset, it is another favorite Sreemangal attraction.</p>
        <h3 class="h2-style">Tea Gardens and Estates</h3>
        <img src="img/srimongol/8.jpg" alt="paris" class="img-style" class="center">
        <p class="p-style">Srimangal’s tea industry began in the mid-1800 when the first tea garden was launched at Malinichera, Sylhet
            District. Today there are more than 150 tea gardens in Sreemangal for you to enjoy. Savor the sunset while
            biking in scenic views with birds chirping in the background. Visit the Sreemangal Tea Factory, Tea Research
            Institute and take a stroll along the plantation to appreciate the meticulous process on how tea is
            produced.</p>
        <h3 class="h2-style">The Seven-Layered Tea</h3>
        <img src="img/srimongol/9.jpg" alt="paris" class="img-style" class="center">
        <p class="p-style">Nilkantha Tea Cabin, located around 5 kilometers south of town near BGB (Previously known as BDR) camp,
            serves tea with visibly 7 different layers. Invented by a local, the 7-layered tea is an original delicacy
            from Sreemangal. Published and televised locally and in different countries in the world, this is a treat
            you wouldn’t want to miss while in town. Sip each layer slowly and try to guess what each layer is for a
            really fun experience. One-layered to six-layered tea are also available. After all, Sreemangal is not
            dubbed as the Tea Capital of Bangladesh for nothing.</p>

        <h2 class="h2-style">How to Go:</h2>
        <p class="p-style">Srimangal is 190 km away from Dhaka. You can reach there directly from Dhaka rather than going to Sylhet
            first. You may take train or even bus to reach Sreemangal.To go Sreemangal one can use bus, train or privet
            car from the capital Dhaka. Bus services are: Shyamoli, Hanif, Ena, Egal, Shohag, Greenline are some main
            bus services. Rent: A/C service- 1000 tk (+,-), Non A/C service- 350 tk and these bus services are available
            from various part of Dhaka city like Sayedabad, Shyamoli, Gabtoli and it is about 03 hours journey from
            Dhaka. Train services are: Kalni, Upoban etc. Rent would be 150tk to 700tk depending on classes these train
            services are available from Kamalapur Railway Station, Dhaka. Train may be the good solution for your
            comfortable journey.</p>

        <h2 class="h2-style">Transportation</h2>
        <h4 class="h2-style"><b>Dhaka to Sreemangal Bus Service</b></h4>
        <table class="table table-bordered">
            <tr>
                <th>Bus Name</th>
                <th>Ticket Catagory</th>
                <th>Price(BDT)</th>
                <th>Contact</th>
                <th>Starting Time</th>
            </tr>
            <tr>
                <td> Hanif Enterprise </td>
                <td> Non AC </td>
                <td> 380 </td>
                <td> Tel: +8802 9008480 </td>
                <td> 8:30am,10:45pm </td>
            </tr>
            <tr>
                <td>Shamoli Paribahan </td>
                <td> Non AC </td>
                <td> 380 </td>
                <td> Tel:02-9124139 </td>
                <td> 8:00am,10:15pm </td>

            </tr>
            <tr>
                <td> Green Line </td>
                <td> Non AC </td>
                <td> 400 </td>
                <td> Tel:02 8331302-4,02 8353004-5 </td>
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
                <td>Sreemangal Tea Resort </td>
                <td> BDT 6,762+</td>
                <td> 01712071502 </td>
                <td>Bangladesh Tea Board, Bhanugach Road, Srimangal, MauloviBazar</td>
                <td><a
                        href="https://www.google.com/maps/place/Sreemangal+Tea+Resort+and+Museum/@24.3019449,91.7599465,21z/data=!4m8!3m7!1s0x375179f338f9090d:0x57548f3a3ad79890!5m2!4m1!1i2!8m2!3d24.301893!4d91.7601034">Click
                        Here</a></td>

            </tr>
            <tr>
                <td>Shanti Bari (Santibari)- Resort</td>
                <td>BDT 2,698</td>
                <td> 01716-189288</td>
                <td>Radhanagar, Srimangal, 3210 Maulvi Bazar, 3200 Sreemangal,Bangladesh</td>
                <td><a href="http://www.google.com/maps/place/24.290057,91.764231">Click Here</a></td>
            </tr>
            <tr>
                <td> Hotel Tea Town </td>
                <td> BDT 2050+</td>
                <td>01718-316202</td>
                <td> Centre Road, Sreemangal</td>
                <td><a
                        href="https://www.google.com/maps/place/Tea+Town+Rest+House/@24.3091325,91.7308211,21z/data=!4m8!3m7!1s0x37517a6c4a32f4c7:0xa1934e9148012f78!5m2!4m1!1i2!8m2!3d24.3091261!4d91.7308999">Click
                        Here</a></td>
            </tr>
            <tr>
                <td> Grand Sultan Tea Resort & Golf</td>
                <td>BDT 14,475</td>
                <td>01730-793501 </td>
                <td> Sreemangal - Bhanugach Rd, Sreemangal 3210</td>
                <td><a
                        href="https://www.google.com/maps/place/Grand+Sultan+Tea+Resort+%26+Golf/@24.3018001,91.764179,21z/data=!4m18!1m9!3m8!1s0x375179ed1539cf29:0xdeb2126f074c1faa!2sGrand+Sultan+Tea+Resort+%26+Golf!5m2!4m1!1i2!8m2!3d24.3017329!4d91.7642977!3m7!1s0x375179ed1539cf29:0xdeb2126f074c1faa!5m2!4m1!1i2!8m2!3d24.3017329!4d91.7642977">Click
                        Here</a></td>
            </tr>

        </table>

        <h2 class="h2-style">Local Food & Drinks</h2>
        <p class="p-style">There are abundant food facilities in the resorts and some local shops where snacks are available. So you, in
            order to satisfy your hunger can go to those shops.
            Kutumbari- offers great local, Indian and chines food at reasonable cost. The architecture and environment
            of this restaurant will allow you to enjoy your meal at homely atmosphere.<br>
            Panshi- is one of the most popular restaurant in Srimanagl and it is located at vanugach road. It offers
            various local dishes.
            Pachbhai- Likewise, this restaurant offers all kind of local dishes.
            Shoshurbari- Similarly, you would able to test local dishes including fish curry, spinach, dal, chicken,
            beef mutton etc.</p>

        <h2 class="h2-style">Best Time for Travelling</h2>
        <ul class="ul-style">
            <p class="p-style">
                <li><b>April to November:</b>You'll see female tribal workers picking tea on numerous tea gardens at
                    sreemangal,which is very picturesque.Best Time of the year to travel.</li>
                <li><b>November to March:</b>Weather is cool and comfortable,and less humid.</li>
            </p>
        </ul>

        <h2 class="h2-style">Tips for Tourist</h2>
        <ul class="ul-style">


        </ul>
        <?php
            }else{
                echo '<a href="login.php"> <button type="button" class="login-btn" style="cursor:pointer">See More</button></a>';
            }
        ?>
    </div>
    </div></div>


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