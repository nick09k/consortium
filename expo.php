<?php
  session_start();

  $db_host = "localhost:3306";
  $db_username = "conso";
  $db_pass = "Conso@123";
  $db_name = "conso19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

  $regquery ="CREATE TABLE IF NOT EXISTS Expo(
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Startup VARCHAR(255) NOT NULL,
    Description VARCHAR(1000) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Website VARCHAR(255) NOT NULL,
    Phone VARCHAR(16) NOT NULL,
    Hiring TINYINT(1) NOT NULL
  )";

  if(mysqli_query($con,$regquery)){
    $msg ="yay";
  }else{
    echo("Error description: " . mysqli_error($con));
  }

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $pagetitle = 'StartUp Expo | Consortium'; ?>
    <!-- Begin Head -->
    <?php include("includes/head.php")?>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
                    <!-- Navbar -->
                    <nav class="s-header-v2__navbar">
                        <div class="container g-display-table--lg">
                            <!-- Navbar Row -->
                            <div class="s-header-v2__navbar-row">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="s-header-v2__navbar-col">
                                    <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                        <span class="s-header-v2__toggle-icon-bar"></span>
                                    </button>
                                </div>

                                <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                                    <!-- Logo -->
                                    <div class="s-header-v2__logo">
                                        <a href="/" class="s-header-v2__logo-link">
                                            <!-- <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="https://startupconclave.ecellvnit.org/static/img/E-Cell_white.png" alt="Ecell Logo" height="50"> -->
                                            <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="img/icon.png" alt="Conso" height="40">
                                        </a>
                                    </div>
                                    <!-- End Logo -->
                                </div>

                                <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                        <ul class="s-header-v2__nav">
                                            <li class="s-header-v2__nav-item"><a href="index.php" class="s-header-v2__nav-link">Home</a></li>
                                            <li class="s-header-v2__nav-item"><a href="/#about" class="s-header-v2__nav-link">About</a></li>

                                            <li class="s-header-v2__nav-item"><a href="/#events" class="s-header-v2__nav-link">Events</a></li>
                                            <li class="s-header-v2__nav-item"><a href="#contact" class="s-header-v2__nav-link">Contact</a></li>
                                            <?php if($_SESSION['email']){ ?>
                                              <li class="s-header-v2__nav-item"><a href="logout.php" class="s-header-v2__nav-link">Logout</a></li>
                                          <?php }else{ ?>
                                            <li class="s-header-v2__nav-item"><a href="reg.php" class="s-header-v2__nav-link">Register</a></li>
                                            <!-- <li class="s-header-v2__nav-item"><a href="login.php" class="s-header-v2__nav-link">Login</a></li> -->
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- End Nav Menu -->
                                </div>
                            </div>
                            <!-- End Navbar Row -->
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </header>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: #161616">

            <div style="" class="expo-back-out"> </div>
            <div style="" class="expo-front-out"> </div>


            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--lg">
                <!--<img src="img/logo/logo-teentitans.png" alt="" width="280" style="margin-top:-180px">-->
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md g-margin-l-20--xs g-margin-l-80--sm">


                    <p class="g-color--white-opacity" style="position: relative;">E-Cell, VNIT <span class="g-font-size-12--xs">in association with</span></p>
                    <img src="img/tielogo.jpg" alt="TIE Nagpur" width="120">


                    <h1 class="g-font-size-60--xs g-font-size-80--sm g-font-size-80--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>STARTUP<br>EXPO</b></h1>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="g-color--white-opacity g-font-size-16--sm">Startup Expo is a chance for tech startups to get out of their shell and interact with mentors and investors from all over the country.<br><b>Ready, Set, Network!</p>
                            <p class="g-color--white-opacity g-font-size-16--sm"> 9th Mar 2019</p>

                        </div>
                    </div>
                    <div class="row">



                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a id="reg_button" href="#newform" title="Register">
                                <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                                <span class="text-uppercase s-btn--white-bg g-radius--50 g-padding-x-30--xs g-padding-y-15--xs g-font-size-13--xs g-color--primary g-padding-x-15--xs">Register Now!</span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>

        <div id="popup" style="background:#000; display:none;">

            <div class="g-container--sm g-padding-y-80--xs g-padding-y-80--sm">
                <div id="close" class="g-text-center--xs g-padding-y-40--xs" >
                  <i class="ti-close"></i>
                </div>


                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Startup Expo</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                    <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"></p>

                </div>
                <form class="center-block g-width-550--sm g-width-650--md g-width-700--lg" method="post" action="exposub.php" onsubmit="return validateData();">
                    <div class="permanent">
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Startup Name" name="startup">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Basic Description" name="desc">
                        </div>
                        <div class="row g-margin-b-50--xs">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="email" class="form-control s-form-v3__input" placeholder="* EMAIL" name="email" style="text-transform: none">
                            </div>
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="text" class="form-control s-form-v3__input" placeholder="* WEBSITE" name="website" style="text-transform: none">
                            </div>


                        </div>

                        <div class="row g-margin-b-50--xs">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v3__input" placeholder="* Phone" name="phone" style="text-transform: none">
                            </div>
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="hiring" placeholder="* No. of members">
                                    <option value="" selected="" disabled="" hidden="">Interested In hiring?</option>
                                    <option value="1" style="color:black">Yes</option>
                                    <option value="0" style="color:black">No</option>
                                    <!-- <option value="More" style="color:black">More</option> -->

                                </select>
                            </div>
                        </div>


                    </div>
                    <!--<div class="temp"></sdiv>-->

                    <br>

                    <div class="g-text-center--xs">
                        <button type="submit" name="register" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button>
                    </div>
                </form>
            </div>
        </div>

        <!--========== END PROMO BLOCK ==========-->
        <!-- Features -->
        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-40--xs g-padding-y-80--sm">
            <h1 class="g-margin-l-20--xs g-margin-l-80--sm g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--dark" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>Why?<br></b></h1>

            <div class="card" id="event-card-bg">
    		    <div class="card-tabs">
    		      <ul class="tabs tabs-fixed-width">
    		        <li class="tab"><a class="active" href="#perks" id="but_perks">Perks</a></li>
    		        <li class="tab"><a id="but_startups" href="#startups">Startups</a></li>
    		      </ul>
    		    </div>
    		    <div class="card-content code">
    		    	<div id="perks">


    				<div class="container g-padding-y-0--xs">

                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Onground Visibility</h4>
                        <a href="#" class="g-color--dark-light footer-para g-font-size-14--xs">
                            Product showcase & feedback from your Target Audience comprising of college students, corporate professionals, businessmen, investors.
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Networking Arena</h4>
                        <a href="#" class="g-color--dark-light footer-para g-font-size-14--xs">
                            Exclusive Entry to Networking Events - Investors Arena & High Tea. Meet mentors & investors from Matrix Partners, Indian Angels, Sequoia etc as well as speakers.
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Publicity</h4>
                        <a href="#" class="g-color--dark-light footer-para g-font-size-14--xs">
                             Presence in the E-Summit in the form of standees, banners & pamphlets put in registration kits. Also, presence in social media posts and official website of Consortium ‘19
                        </a>
                    </div>


                </div>



            </div>
            </div>
            <div id="startups" style="display:none;">

              <div class="container g-padding-y-0--xs">

                  <div class="row">
                      <div class="col-sm-12 col-md-4">
                          <a href="https://novzo.in" target="_blank"><img src="img/expo/novzo.png" alt="Novzo" height="190" width="auto" /></a>
                      </div>


                  </div>



              </div>



    				</div>


    		    </div>
		  </div>
        </div>
        <!-- End Features -->



        <div class="g-promo-section" style="background:#000" id="about">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-40--xs">
                <div class="row">
                    <div class="col-md-4 g-margin-t-45--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white" style="font-weight:900">About</h2>
                        </div>
                        <p class="g-font-size-14--xs g-font-size-16--sm g-color--white-opacity">Startup Expo provides a grand platform for startups to display their product and/ or service at our annual entrepreneurship Summit Consortium 19.<br>This is also an opportunity for the attendees to learn about the new entrepreneurial techniques that these startups have employed to become successful in their journey.</p>

                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <img src="img/expo-about.jpg" alt="" style="max-width:100%; max-height:400px">
                    </div>
                </div>


            <h2 class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--md g-color--white g-padding-x-20--xs">Get In Touch</h2>
        <!--<img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">-->
            <!--<div class="g-container--md g-padding-y-40--xs">-->

            <div id="managers" class="row g-row-col--5 g-padding-x-40--xs g-padding-y-40--xs g-padding-x-20--md g-padding-x-100--lg">
                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Nachiket Dhande</h4>
                         <p class="g-color--white">+91 95453 02811<br>nachiket.dhande@gmail.com</p>
                    </div>
                </div>
                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Sagar Bansal</h4>
                         <p class="g-color--white">+91 77580 11192<br>sagarbansal@ecellvnit.org</p>
                    </div>
                </div>

                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Anushree Rungta</h4>
                         <p class="g-color--white">+91 98224 44112<br>anushree.rungta@gmail.com</p>
                    </div>
                </div>

            </div>
            <!--</div>-->
            </div>
        </div>
        <!-- End Coordinator -->

        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer.php");?>
        <?php include("includes/script.php");?>

        <script type="text/javascript">
          $("#reg_button").click(function(){
            $("#popup").css({"display":"block","color":"white"});
            var x = $("#popup").offset().top;
            $("html ,body").animate({ scrollTop: x},800);

          });
          $("#close").click(function(){
            $("#popup").css({"display":"none"});
            var y = $("#login").offset().top;
            $("html ,body").animate({ scrollTop: y},800);
          });

          $("#but_perks").click(function(){
            $("#perks").css({"display":"block"});
            $("#perks").animate({opacity: 1}, 1000);
            $("#startups").css({"display":"none"});
            $("#startups").animate({opacity: 0}, 100);
          });

          $("#but_startups").click(function(){
            $("#perks").css({"display":"none"});
            $("#perks").animate({opacity: 0}, 1000);
            $("#startups").css({"display":"block"});
            $("#startups").animate({opacity: 1}, 100);
          });
        </script>

        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
  <!--      <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>-->

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
  <!--      <script type="text/javascript" src="vendor/jquery.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>-->
  <!--      <script src="/js/cards.js"></script>-->
		<!--<script src="/js/materialize.js"></script>-->

        <!-- General Components and Settings -->
  <!--      <script type="text/javascript" src="js/global.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/header-sticky.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/scrollbar.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/swiper.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/parallax.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/wow.min.js"></script>-->
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
