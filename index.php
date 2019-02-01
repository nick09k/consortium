<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php $pagetitle = 'Consortium'; ?>
    <!-- Begin Head -->
    <?php include('includes/head.php'); ?>
    <!-- End Head -->

    <!-- Body -->
    <body style="background: #FFF">

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center" style="background: #161616; height:120vh">

            <div style="" class="expo-back-out"> </div>
            <div style="" class="expo-front-out"> </div>


            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--lg">
                <!--<img src="img/logo/logo-teentitans.png" alt="" width="280" style="margin-top:-180px">-->
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md g-margin-l-20--xs g-margin-l-80--sm">

                    <h4 class="g-color--white-opacity" style="position: relative;">Ecell, VNIT presents</h4>

                    <!--<h1 class="g-font-size-60--xs g-font-size-80--sm g-font-size-80--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>Consortium'19</b></h1>-->
                    <h2 class="g-font-size-60--xs g-font-size-80--sm g-font-size-40--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>Inspiring Curosity</b></h2>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="g-color--white-opacity g-font-size-16--sm">A grand platform for startups to display their product and/ or service to all the people at our annual entrepreneurship summit Consortium 19</p>
                            <p class="g-color--white-opacity g-font-size-16--sm"> 8th Mar - 10th Mar</p>

                        </div>
                    </div>
                    <div class="row">



                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a id="reg_button" href="reg.php" title="Register">
                                <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                                <span class="text-uppercase s-btn--white-bg g-radius--50 g-padding-x-30--xs g-padding-y-15--xs g-font-size-13--xs g-color--primary g-padding-x-15--xs">Register now!</span>
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
                <form class="center-block g-width-550--sm g-width-650--md g-width-700--lg" method="post" action="" onsubmit="return validateData();">
                    <div class="permanent">
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Startup Name" name="teamname" id="team_name">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Basic Description" name="organisation" id="college">
                        </div>
                        <div class="row g-margin-b-50--xs">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="email" class="form-control s-form-v3__input" placeholder="* EMAIL" name="teamemail" style="text-transform: none" id="team_email">
                            </div>
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="text" class="form-control s-form-v3__input" placeholder="* WEBSITE" name="teamemail" style="text-transform: none" id="team_email">
                            </div>


                        </div>

                        <div class="row g-margin-b-50--xs">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v3__input" placeholder="* Phone" name="teamemail" style="text-transform: none" id="team_email">
                            </div>
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* No. of members" id="members">
                                    <option value="" selected="" disabled="" hidden="">Interested In hiring?</option>
                                    <option value="2" style="color:black">2</option>
                                    <option value="3" style="color:black">3</option>

                                </select>
                            </div>
                        </div>


                    </div>
                    <!--<div class="temp"></sdiv>-->

                    <br>

                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="g-padding-x-10--xs g-padding-x-80--md day" style="">

            <div class="row">
                <a href="" class="product-card col-xs-12 col-md-4 g-padding-x-40--xs " style="background:url(img/970x647/product-card-1.png) 10%">
                    <div class="product-card__item g-padding-y-40--xs">
                        <h3 class="product-card__h2 g-color--white"><b>Day 1</b></h3>
                        <div class="product-card__text g-color--white">
                        <p class="g-padding-y-40--xs g-color--white">Change Signature refactoring, Google App Engine debugger, Go core dumps, Testify and Mozilla rr.</p>
                        <span class="text-uppercase s-btn--white-bg g-radius--50 g-padding-x-20--xs g-padding-y-10--xs g-font-size-13--xs g-color--dark g-padding-x-10--xs">Learn more</span>
                        </div>
                        </div>
                </a>
                 <a href="" class="product-card col-xs-12 col-md-4 g-padding-x-40--xs " style="background:url(img/970x647/product-card-3.png)">
                    <div class="product-card__item g-padding-y-40--xs">
                        <h3 class="product-card__h2 g-color--white"><b>Day 2</b></h3>
                        <div class="product-card__text g-color--white">
                        <p class="g-padding-y-40--xs g-color--white">Change Signature refactoring, Google App Engine debugger, Go core dumps, Testify and Mozilla rr.</p>
                        <span class="text-uppercase s-btn--white-bg g-radius--50 g-padding-x-20--xs g-padding-y-10--xs g-font-size-13--xs g-color--dark g-padding-x-10--xs">Learn more</span>
                        </div>
                        </div>
                </a>
                 <a href="" class="product-card col-xs-12 col-md-4 g-padding-x-40--xs " style="background:url(img/970x647/product-card-2.png) 30%">
                    <div class="product-card__item g-padding-y-40--xs">
                        <h3 class="product-card__h2 g-color--white"><b>Day 3</b></h3>
                        <div class="product-card__text g-color--white">
                        <p class="g-padding-y-40--xs g-color--white">Change Signature refactoring, Google App Engine debugger, Go core dumps, Testify and Mozilla rr.</p>
                        <span class="text-uppercase s-btn--white-bg g-radius--50 g-padding-x-20--xs g-padding-y-10--xs g-font-size-13--xs g-color--dark g-padding-x-10--xs">Learn more</span>
                        </div>
                        </div>
                </a>


            </div>

        </div>

        <div class="g-promo-section" style="background:#fff00;" id="about">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-40--xs">
                <div class="row" style="display: flex;align-items: center;">
                    <div class="col-md-5 g-margin-t-45--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--dark" style="font-weight:900">About</h2>
                        </div>
                        <p class="g-font-size-14--xs g-font-size-16--sm g-color--dark-opacity">Welcome to the extravaganza that is Consortium! Consortium, the Annual Entrepreneurship Summit of VNIT Nagpur comprises of invigorating events like Startup Conclave and Swades. The summit aims at fueling entrepreneurial attitude amongst students through healthy competition and exciting challenges. It fosters the importance of leadership and decision making and introduces young technocrats to various management practices in the corporate world.</p>

                    </div>
                    <div class="col-md-7  g-margin-t-45--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="row">

                            <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--lg">
                                <div class="g-text-center--xs">
                                    <div class=" g-margin-b-0--xs">
                                        <figure class="g-display-inline-block--xs g-font-size-30--xs g-color--dark  g-margin-b-0--xs js__counter">30</figure>
                                        <span class="g-font-size-30--xs g-color--dark">+</span>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                    <h4 class="g-font-size-18--xs g-color--dark">Events</h4>
                                </div>
                            </div>

                            <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--lg">
                                <div class="g-text-center--xs">
                                    <div class=" g-margin-b-0--xs">
                                        <figure class="g-display-inline-block--xs g-font-size-30--xs g-color--dark  g-margin-b-0--xs js__counter">15</figure>
                                        <span class="g-font-size-30--xs g-color--dark">K+</span>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                    <h4 class="g-font-size-18--xs g-color--dark">Attendees</h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--sm">
                                <div class="g-text-center--xs">
                                    <div class=" g-margin-b-0--xs">
                                        <figure class="g-display-inline-block--xs g-font-size-30--xs g-color--dark  g-margin-b-0--xs js__counter">300</figure>
                                        <span class="g-font-size-30--xs g-color--dark">+</span>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                    <h4 class="g-font-size-18--xs g-color--dark">Startups</h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6 g-full-width--xs">
                                <div class="g-text-center--xs">
                                    <div class=" g-margin-b-0--xs">
                                        <figure class="g-display-inline-block--xs g-font-size-30--xs g-color--dark js__counter">50</figure>
                                        <span class="g-font-size-30--xs g-color--dark">+</span>
                                    </div>
                                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                    <h4 class="g-font-size-18--xs g-color--dark">Speakers</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container g-padding-y-10--xs g-padding-y-15--sm">

            </div>
            <div style="position:relative;height:0;padding-bottom:56.24%"><iframe src="https://www.youtube.com/embed/gKfnDdUL-LE?ecver=2&amp;controls=0&amp;showinfo=0&amp;modestbranding=1&amp;vq=highres&amp;rel=0" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>

            </div>


        </div>


        <!-- End Coordinator -->


        <!--========== END PROMO BLOCK ==========-->
        <!-- Features -->

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



        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-40--xs g-padding-y-80--sm">
            <h1 class="g-margin-l-20--xs g-margin-l-80--sm g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--dark" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>Why?<br></b></h1>

            <div class="card" id="event-card-bg">
    		    <div class="card-tabs">
    		      <ul class="tabs tabs-fixed-width">
    		        <li class="tab"><a class="active" href="#bizmantra4">Incentives</a></li>
    		        <li class="tab"><a href="#bizmantra5">Startups</a></li>
    		      </ul>
    		    </div>
    		    <div class="card-content code">
    		    	<div id="bizmantra4">


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
            <div id="bizmantra5">

    			     	<h6>Will be updated soon...</h6>



    				</div>


    		    </div>
		  </div>
        </div>
        <!-- End Features -->

        <!--Startup EXPO-->

        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: #161616">

            <div style="" class="expo-back-out"> </div>
            <div style="" class="expo-front-out"> </div>


            <div class="container g-padding-y-125--xs g-padding-y-0--lg">
                <!--<img src="img/logo/logo-teentitans.png" alt="" width="280" style="margin-top:-180px">-->
                <div class="g-margin-t-30--xs g-margin-t-60--sm g-margin-t-100--md g-margin-b-30--xs g-margin-b-70--md g-margin-l-20--xs g-margin-l-80--sm">

                    <h4 class="g-color--white-opacity" style="position: relative;">Ecell, VNIT presents</h4>

                    <h1 class="g-font-size-60--xs g-font-size-80--sm g-font-size-80--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>STARTUP<br>EXPO</b></h1>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="g-color--white-opacity g-font-size-16--sm">A grand platform for startups to display their product and/ or service to all the people at our annual entrepreneurship summit Consortium 19</p>
                            <p class="g-color--white-opacity g-font-size-16--sm"> 8th Mar - 10th Mar</p>

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
        </script>

        <!--========== END FOOTER ==========-->

        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
