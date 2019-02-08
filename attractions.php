<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <?php $pagetitle = 'Attractions | Consortium'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>
  <style>
      .link{
          color:#fff;
          font-size:16px !important;
      }
      .link:hover{
          color:#4875B4;
          text-decoration:underline;
      }
      .ti-linkedin{
         color:#4875B4;
      }
  </style>

    <!-- Body -->
    <body style="background: black">

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background:#000;height:100vh; display:flex; align-items:center">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-50--md g-color--white g-letter-spacing--3">Consortium'19</h1>
                <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Attractions</h2>
                <div class="indicate"><i class="ti-angle-double-down"></i></div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
        <div class="core-container">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm  g-padding-x-0--xs g-padding-x-40--sm g-padding-x-100--md" style="background:rgba(0, 0, 0, 0.4)">
                <div class="row product-grid" id="events">
            <a href="#" class="product-card col-xs-12 col-md-5 col-lg-4">
                <div class="product-card__item-grid" style="background:url(https://scontent-bom1-2.cdninstagram.com/vp/b92e729bbd83a3a08438e3284c2feeae/5CE92D78/t51.2885-15/sh0.08/e35/s640x640/49858665_375242899922672_3421410529336688414_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com)">
                    <div class="product-card__item-text">
                        <h3 class="g-color--white">How To Make B-Plan</h3>
                        <p class="g-color--white">A goal without a plan is just a wish.<br>
                        Join us for a lively and interactive session on "How to Create a B-Plan" exclusively for all VNITians and shortlisted teams of StartUp Conclave'19.<br>Date: 21 JAN 19</p>
                        <p class="g-color--white"><b>Registerations are closed!</b></p>
                        <pclass="g-color--white"><i>#Webinar</i></p>


                    </div>
                </div>
            </a>
             <a href="https://docs.google.com/forms/d/e/1FAIpQLScQekhKZybm3YGNpKxP31Ce1uHylI9ERXFe0tbKmIT9b_uMQg/viewform?usp=sf_link" target="_blank" class="product-card col-xs-12 col-md-5 col-lg-4" >
                <div class="product-card__item-grid" style="background:url(img/events/zerodha.jpg)">

                    <div class="product-card__item-text">
                        <h3 class="g-color--white">Stock Investing Workshop</h3>
                        <p class="g-color--white">Want to learn how to invest in a stock market and let your money work for you?<br>
                        E-Cell VNIT brings to you a stock investing workshop in association with Zerodha. Join us live for the interactive workshop to get the lay of the land. <br>Date: 17 FEB 19</p>
                        <p class="g-color--white"><b>Register Now!</b></p>
                        <p class="g-color--white"><i>#Workshop</i></p>


                    </div>

                </div>
            </a>

        </div>
            </div>
        </div>

            <!--<div class="row g-overflow--hidden">-->

            <!--</div>-->

        </div>
        <!-- End Speakers -->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <script>

            var wid = $(".product-card__item-grid").width();
            $(".product-card__item-grid").css({
                "height":wid+"px"
            });

        </script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
