<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $pagetitle = 'Internship Fair | Consortium'; ?>
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
                                            <li class="s-header-v2__nav-item"><a href="#about" class="s-header-v2__nav-link">About</a></li>

                                            <li class="s-header-v2__nav-item"><a href="#companies" class="s-header-v2__nav-link">Companies</a></li>
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
        <!--Internship Fair-->

        <div class="s-promo-block-v3 g-bg-position--center internship g-fullheight--xs" style="background:#121211;    display: flex;align-items: center;">
            <div style="" class="intern-back"> </div>

            <div class="container g-padding-y-100--xs g-padding-y-0--lg">
                <!--<img src="img/logo/logo-teentitans.png" alt="" width="280" style="margin-top:-180px">-->
                <div class="g-margin-t-34--xs g-margin-t-60--sm g-margin-t-100--md g-margin-b-30--xs g-margin-b-70--md g-margin-l-20--xs g-margin-l-80--sm">

                    <br>
                    <p class="g-color--white-opacity g-font-size-18--xs" style="position: relative;"><b>E-Cell VNIT & Department Of T&P VNIT</b><br>presents,</p>
                    <h1 class="g-font-size-36--xs g-font-size-40--sm g-font-size-80--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>INTERNSHIP<br>FAIR</b></h1>


                    <div class="row">
                        <div class="col-sm-4">
                            <p class="g-color--white g-font-size-16--sm">An entrepreneur is also a job provider. Why shouldn't Consortium be one? Not interned yet?</p>
                            <p class="g-color--white"> <span class="g-font-size-24--xs">Stipend Upto <span class="g-color--red">&#8377; 50K </span></span><br>8th - 10th March 2019 | VNIT Nagpur<br>Registrations are open!</p>

                        </div>
                    </div>


                </div>

            </div>
        </div>




         <div class="g-promo-section" style="background:#000" id="about">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-40--xs">
                <div class="row">
                    <div class="col-md-4 g-margin-t-45--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white" style="font-weight:900">About</h2>
                        </div>
                        <p class="g-font-size-14--xs g-font-size-16--sm g-color--white-opacity">Internship Fair is a chance to refine your skills, build up your personality and attain an experience of a lifetime which impact on your CV.<br>And it's a time to put the first step forward in the journey of becoming a leader of tomorrow because the expert in anything was once a beginner.<br>Apna time aa gya!</p>

                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <img src="img/expo-about.jpg" alt="" style="max-width:100%; max-height:400px">
                    </div>
                </div>



            <!--</div>-->
            </div>
        </div>


        <!--========== END PROMO BLOCK ==========-->
        <!-- Features -->
        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-40--xs g-padding-y-60--sm" id="compaanies">
            <h1 class="g-margin-l-20--xs g-margin-l-80--sm g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--dark" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>Recruiters<br></b></h1>

            <div class="card" id="event-card-bg">
    		    <!--<div class="card-tabs">-->
    		    <!--  <ul class="tabs tabs-fixed-width">-->
    		    <!--    <li class="tab"><a class="active" href="#perks" id="but_perks">Companies</a></li>-->
    		    <!--    <li class="tab"><a id="but_startups" href="#startups">Timeline</a></li>-->
    		    <!--  </ul>-->
    		    <!--</div>-->
    		    <div class="">
    		    	<div id="perks">


    				<div class="container g-padding-y-30--xs g-padding-x-40--sm g-padding-x-0--xs" style="text-align:center">

                        <div class="row ">
                            <div class="col-sm-12 col-md-4">
                                <a href="https://www.oneplus.in/" class="g-color--dark-light footer-para g-font-size-14--xs">
                                    <img src="img/internshipfair/oneplus.png" width="200" alt="logo" style="margin-left:calc(50% - 100px)">
                                </a>

                                <p><a class="g-padding-x-10--xs g-padding-y-10--xs g-font-size-13--xs g-color--primary g-padding-x-10--xs" href="#oneplus" onclick="showmodel('oneplus');">Register Now</a></p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="https://www.simplecrm.com.sg/" class="g-color--dark-light footer-para g-font-size-14--xs">
                                    <img src="img/internshipfair/simplecrm.png" width="220" alt="logo" style="margin-left:calc(50% - 100px)">
                                </a>
                                <p>Registrations will be open soon</p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="https://navigus.in/" class="g-color--dark-light footer-para g-font-size-14--xs">
                                    <img src="img/internshipfair/navigus.png" width="220" alt="logo" style="margin-left:calc(50% - 100px)">
                                </a>
                                <p>Registrations will be open soon</p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="http://eco-genenergy.com/" class="g-color--dark-light footer-para g-font-size-14--xs">
                                    <img src="img/internshipfair/ecozen.png" width="220" alt="logo" style="margin-left:calc(50% - 100px)">
                                </a>
                                <p>Registrations will be open soon</p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="https://makerdemy.com/" class="g-color--dark-light footer-para g-font-size-14--xs">
                                    <img src="img/internshipfair/makerdomy.png" width="220" alt="logo" style="margin-left:calc(50% - 100px)">
                                </a>
                                <p>Registrations will be open soon</p>
                            </div>

                        </div>
                    </div>
            </div>
        <!--    <div id="startups" style="display:none;">-->

        <!--      <div class="container g-padding-y-0--xs">-->

        <!--          <div class="row">-->
        <!--              <div class="col-sm-12 col-md-4">-->
        <!--                  Will be Updated Soon!-->
        <!--                  <br>-->
        <!--                  All the registration form will be released by Department Of Training & Placement soon!-->

        <!--              </div>-->


        <!--          </div>-->



        <!--      </div>-->
    				<!--</div>-->


    		    </div>
		  </div>
        </div>
        <!-- End Features -->


        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-40--xs g-padding-y-80--sm" style="background:#000" >
            <h2 class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--md g-color--white g-padding-x-20--xs" style="text-align:center">Get In Touch</h2>

            <div id="managers" class="row g-row-col--5 g-padding-x-40--xs g-padding-y-40--xs g-padding-x-20--md g-padding-x-100--lg">
                <div class="col-xs-4 col-sm-offset-2 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Ayush Singh</h4>
                         <p class="g-color--white">+91 94235 39984<br>ayushsingh@ecellvnit.org</p>
                    </div>
                </div>
                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Sri Charan Mahavadi</h4>
                         <p class="g-color--white">+91 89194 84722<br>sricharan@ecellvnit.org</p>
                    </div>
                </div>

            </div>
        </div>


        <!--<div id="oneplus" class="intern-model" style="display:none">-->
        <!--        <div class="container g-padding-y-40--xs g-padding-y-80--sm g-padding-x-20--xs g-padding-x-80--xs g-margin-t-40--xs">-->

        <!--            <a class="g-color--white g-font-size-20--xs" onclick="closemodel('oneplus');" style="position:absolute; left:90%" >X</a>-->

        <!--            <h3 class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--md g-color--white g-padding-x-20--xs">One Plus</h3>-->

        <!--            <p class="g-color--white-opacity">All the details will be here</p>-->
        <!--            <div class="wow fadeInLeft g-margin-t-40--xs" data-wow-duration=".3" data-wow-delay=".5s">-->
        <!--                <a href="#about" title="Register">-->
                            <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
        <!--                    <span class="text-uppercase s-btn--primary-bg g-radius--50 g-padding-x-30--xs g-padding-y-15--xs g-font-size-13--xs g-color--white g-padding-x-15--xs">Fill Form <span class="ti-angle-right"></span></span>-->
        <!--                </a>-->
        <!--            </div>-->

        <!--        </div>-->
        <!--</div>-->




        <!-- End Coordinator -->

        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
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


        <script>

            function showmodel(company){
                $("#"+company).css({"display": "block"});
            }

            function closemodel(company){
                $("#"+company).css({"display": "none"},100);
            }

        </script>


        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
