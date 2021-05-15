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
        <h1 class="text1">Cox's Bazar Sea Beach</h1>

        <img src="img/cox/2.jpg" alt="long" class="img-style">
        <h2 class="h2-style">Description:</h2>
        <p class="p-style">Cox's Bazar (Bengali: কক্সবাজার) is a town, a fishing port and district headquarters in Bangladesh. It is
            known for its wide sandy beach which is the world's longest natural sandy sea beach. It is an unbroken 125
            km sandy sea beach with a gentle slope. It is located 150 km south of Chittagong. Cox’s Bazar is also known
            by the name "Panowa", the literal translation of which means "yellow flower". Its other old name was
            "Palongkee". The modern Cox's Bazar derives its name from Captain Cox (died 1799), an officer serving in
            British India. In the 18th century, an officer of British East India Company, Captain Hiram Cox was
            appointed as the Superintendent of Palongkee outpost after Warren Hastings became the Governor of Bengal.
            Captain Cox was specially mobilised to deal with a century long conflict between Arakan refugees and local
            Rakhains. The Captain was a compassionate soul and the plight of the people touched his heart. He embarked
            upon the mammoth task of rehabilitating refugees in the area, and made significant progress. A premature
            death took Captain Cox in 1799 before he could finish his work. But the work he had done earned him a place
            in the hearts of the locals and to commemorate his role in rehabilitation work a market was established and
            named after him as Cox's Bazaar ("Cox's Market"). Although Cox's Bazar is one of the most visited tourist
            destinations in Bangladesh, it has yet to become a major international tourist destination, due to lack of
            publicity.
        </p>

            <?php
            if(isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true && isset($_SESSION["user"])){
                ?>

        <h2 class="h2-style">Tourist Attraction</h2>

        <h3 class="h2-style">Ramu and Lamapara</h3>
        <img src="img/cox/3.jpg" alt="long" class="img-style">
        <p class="p-style">Ramu and Lamapara: A typical Buddhist village located 16 kilometers away from Cox's Bazar. It is accessible
            from the main highway leading to Chittagong. The village accommodates monasteries, khyangs and pagodas. The
            beautiful Burmese Bara Khyang at lamapara has the country's largest bronze statue and it has three wooden
            buildings house, a number of relics-precious Buddhist images of silver and gold set with gems and stones
            inside the pagoda. The temple lies in a quite palm shaded village about 5km from Ramu, on the bank of
            Baghkhali River. The village is famous for its handicrafts and homemade Cigars. Weavers trade there in open
            workshops and craftsman make handmade cigars in their pagoda like house.</p>
        <h3 class="h2-style">Inani Beach</h3>
        <img src="img/cox/4.jpg" alt="long" class="img-style">
        <p class="p-style">Inani beach could be a nice treat if you want a quiet moment from the city. The corals are spread among
            pristine and the sights will calm you and make you feel relaxed, the sound of the breeze comes out from the
            sea will soothe your soul. Inani beach is 32 km away from Cox’s Bazar, you can take a taxi to reach or can
            also enjoy the private ride with the beautiful scenarios on the path. The Inani beach is the fine place
            which will relax you and provide you with beautiful sights.</p>
        <h3 class="h2-style">Himchari</h3>
        <img src="img/cox/5.JPG" alt="long" class="img-style">
        <p class="p-style">Himchari with its beautiful waterfalls and hilltop overlooking the beach, six kilometers away from Kolatoli
            Beach is the most beautiful place which attracts the tourist. If you are planning for a wonderful picnic
            with family or friends with beautiful sights then Himchari is one of the best places. To visit Himchari
            before heading towards Inani beach would be a great idea and you will enjoy the beautiful sights as well.
        </p>
        <h3 class="h2-style">Teknaf</h3>
        <img src="img/cox/6.jpg" alt="long" class="img-style">
        <p class="p-style">Teknaf is about 84km from Cox’s Bazar and it may be a memorable experience as the journey in marine drive
            through forested hilly roads. Taknaf is the border town in the southern tip of Bangladesh territory. The
            side of river Naf and the Bay of Bengal situate Teknaf Town. Wide sandy beach in the backdrop of high hills
            with green forests with rich flora & fauna and natural waterfalls enhance charms of the tourists and the
            scenery never to be forgotten. You can enjoy shopping in the local market called Burmese Market where you
            will find all the Burmese and tribal handmade materials. Do not forget to visit the Wall of Ma-Thin which
            tells a sad story of love.</p>
        <h3 class="h2-style">Moheskhali Island</h3>
        <img src="img/cox/7.jpg" alt="long" class="img-style">
        <p class="p-style">Moheskhali Island- It is another attraction for the tourists who come to Cox’s Bazar. The area of the island
            is about 268 square kilometers. The center of the island and the eastern coastline rises, a range of low
            hills, up to 300 feet high. But the coast to the west and north is a low-lying treat, covered by mangrove
            jungle. In the hills on the coast is built the shrine of Adinath and by its side on the same hill is
            Buddhist Pagoda. You can go to this Island by local motorboat called trawler or by speedboat from cox’s
            Bazar fisheries Ghat (Harbor). </p>


        <h2 class="h2-style">How to Go:</h2>
        <p class="p-style">You may come to Cox’s Bazar by bus or air directly. There are several bus services available from Dhaka to
            Cox’s Bazar. Bus fare is around BDT 650-900 non-A/C and BDT 1200-1800 A/C . The journey is near about 8-10
            hours. As well as Bangladesh Biman, United Air, Regent Air has domestic flights for Dhaka to Cox’s
            Bazar.From cox’s bazar you can easily reach to the Laboni, Kolatoli and Inani point by Rickshaw or Auto
            Rickshaw.</p>

        <h2 class="h2-style">Transportation</h2>
        <h4 class="h2-style">Dhaka to Cox's-Bazar Bus Service</h4>
        <table class="table table-bordered">
            <tr>
                <th>Bus Name</th>
                <th>Ticket Catagory</th>
                <th>Price(BDT)</th>
                <th>Contact</th>
                <th>Starting Time</th>
            </tr>
            <tr>
                <td> Green Line Paribahan </td>
                <td> Scania Business Class </td>
                <td> 2000 </td>
                <td> 0341-62533 </td>
                <td> 8:30am,10:45pm </td>
            </tr>
            <tr>
                <td>TR Travels </td>
                <td> Hyundai Universe </td>
                <td> 2000 </td>
                <td> 02-9331864 </td>
                <td> 7:00am,11:15pm </td>

            </tr>
            <tr>
                <td> Shamoly Paribahan </td>
                <td> Economy Class </td>
                <td> 1500 </td>
                <td>0443449934 </td>
                <td> 10:00pm </td>

            </tr>

        </table>

        <h4 class="h2-style">Dhaka to Cox's-Bazar Flight Service</h4>
        <table class="table table-bordered">
            <tr>
                <th>Airways</th>
                <th>Flight Schedule</th>
                <th>Booking</th>

            </tr>
            <tr>
                <td>Biman Bangladesh Airlines</td>
                <td><a href="https://www.biman-airlines.com/flights/schedule">Check Here</a></td>
                <td> </td>

            </tr>
            <tr>
                <td>Novo Air</td>
                <td><a href="https://www.flynovoair.com/index.php/travelinfo/flight_schedules">Check Here</a> </td>
                <td> </td>
            </tr>

        </table>


        <h2 class="h2-style">Staying Details</h2>
        <h4 class="h2-style"><b>Hotel/Motel/Resort/Cottage List </b></h4>

        <table class="table table-bordered">
            <tr>
                <th> Name</th>
                <th>Price(Avg/Night)</th>
                <th>Contact No.</th>
                <th>Address</th>
                <th>Map</th>

            </tr>
            <tr>
                <td> Hotel Seagull Hotel Motel Zone </td>
                <td>BDT 4500</td>
                <td> Tel: +88 0341 62480 – 90,Cell: +88 01766666530, +88 0176666653 </td>
                <td>Cox’s Bazar Sea Beach,Cox’s Bazar</td>
                <td><a href="http://www.google.com/maps/place/21.425090,91.975995">Click Here</a> </td>
            </tr>
            <tr>
                <td>Hotel Sea Palace </td>
                <td>BDT 3050</td>
                <td>Phone: 880-341-63692, 63792, 63794, 63826, and 63853,Mobile: 01714652227-8, 01979405051-2</td>
                <td> Kalatoli Road, Cox’s Bazar</td>
                <td><a
                        href="https://www.google.com/maps/place/Hotel+Sea+Palace+Ltd./@21.4208617,91.9808777,21z/data=!4m8!3m7!1s0x30adc87c628afa29:0x7532d57f3026f6b9!5m2!4m1!1i2!8m2!3d21.4207893!4d91.9808931">Chick
                        Here</a></td>
            </tr>
            <tr>
                <td> Hotel Sea Crown</td>
                <td> BDT 3221</td>
                <td>01878-745843 </td>
                <td>Marin Drive, Kola Toil New Beach</td>
                <td><a
                        href="https://www.google.com/maps/place/Hotel+Sea+Crown/@21.4149446,91.9812717,17z/data=!3m1!4b1!4m8!3m7!1s0x30adc880b3631a61:0x2006f2e9cab8e8cc!5m2!4m1!1i2!8m2!3d21.4149446!4d91.9834604">Click
                        Here</a></td>
            </tr>
            <tr>
                <td> Hotel Panowa</td>
                <td>BDT 2000</td>
                <td>01711-038270 </td>
                <td> Laldeghir Par,Cox’s Bazar</td>
                <td><a href="http://www.google.com/maps/place/21.444352,91.976046">Click Here</a></td>
            </tr>

        </table>

        <h2 class="h2-style">Local Food & Drinks</h2>
        <p class="p-style">There are a lot of restaurants along the Sea Beach Road and in the Hotel Motel Zone. They offer a wide
            variety of seafood cuisine display. Not only there are our local recipes; you can taste fast foods as well
            as, Asian and European dishes. In most of the major hotels, you can get western foods. Prices are in Taka
            (Tk) and American dollars.
            Among them, Pushpee, Jhaubon, Niribilli are good choices for family besides individuals. They cost from from
            $60.00 TK to $130.00 TK or $1.00 USD to $2.00 USD. There is hardly any Bengali family who have not been to
            Jhaubon or Niribili restaurant.
            I for one am a special fan of their Rupchanda fry (Deep Fried Pomphrey).But if you are a seafood lover,
            there are few restaurants who specialize in this. EFC (Elite Food Corner), a live fish restaurant where you
            can enjoy different fresh grilled fishes, Devine sea stone cafe, Mermaid cafe, Sea lamp beach cafe, Mermaid
            beach resort, The Cove are like that.
            There are also restaurants like Koyla, Stone forest, Mamma’s food, Rock n roll, Taranga restaurant, Beach
            planet, Tabbaq where you can enjoy good food with affordable price. You can find lаkkhа, prawn, hilsha,
            crabs and lоbѕtеrѕ invariably all restaurants and hotels in Cox’s Bazar.
            Besides typical Bengali dishes, you can enjoy fried fish, shrimp salad, pasta and fish pizza for BDT
            450-800. A traveler should enjoy the local food of the traveling area, that can bring you a whole new test
            and experience.
            Bengali dishes are daal (lentil curry), bhaat (boiled rice), beef curry, different types of bhorta ( a spicy
            mixture of different mashed vegetables), pickles and relishes. Sun dried fish dishes are a very popular
            local tradition.</p>

        <h2 class="h2-style">Best Time for Travelling</h2>
        <p class="p-style">Interestingly, there is not a single day when you will not find people on Cox’s Bazar Sea beach admiring the
            natural beauty of sunrise or sunset. The average temperature is 34.8-degree centigrade. Peak season when it
            is most visited remains between October and
            March. It is the best time to fly because airlines are full and no delay in flight schedule. But you need to
            reserve the hotel rooms earlier because of the soaring price. But if you plan to travel during the monsoon
            and summer which is from May till September you may avoid the certainly crowded beach.</p>

        <h2 class="h2-style">Tips for Tourist</h2>
        <p class="p-style">Though it is yet to become a major international tourist destination, be assured that the beach of Cox’s
            Bazar will be filled with days of endless fun for you and your family and far from boring. May through
            September may not be the right season to go to cox bazar.
            But from November, get your backpack ready. Do take hats and sandals because the sand becomes very hot
            during mid-day. Do not forget a change of clothes, towels, and camera.A piece of advice to the visitor from
            abroad, do exchange your local currency to Bangladeshi taka when you arrive here before setting off to Cox’s
            bazar. Most banks will give you best exchange rates. Another good place also for exchange is hotels.
            There are many ATM’s available at this place beside the capital city which gives visitors facility to pull
            currency from their local banks. Please clarify with your bank that your ATM card is accepted in Bangladesh
            before using it here.
            When you are, all set to visit this less known tourist spot, you can easily reach there by road and air.
            There are a lot of nice places to stay on this beach to choose from.
            All around the beach area as well as in the hotels, there are Souvenir shops that sell native handicrafts,
            shell markets, and restaurants serving authentic Bangladeshi cuisine are found in abundance.
            It is very commonplace in Bangladesh that local people are saying hi-hello to you even though they don’t
            know you. They may even ask personal questions like your marital status, numbers of children, etc. which a
            foreigner may find pretty peculiar. You will find people friendlier than residents pf metro when you are
            traveling around the countryside.</p>
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