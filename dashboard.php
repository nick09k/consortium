<?php
  @session_start();
  $db_host = "localhost:3306";
  $db_username = "conso19";
  $db_pass = "Conso@123";
  $db_name = "conso19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");
  if($_SESSION['email']){
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <?php $pagetitle = 'Dashboard | Consortium'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>


    <!-- Body -->
    <body style="background: black">

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background:#000;height:100vh; display:flex; align-items:center">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-50--md g-color--white g-letter-spacing--3">Your Events - Consortium'19</h1>
                <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Dashboard</h2>
                <a href="register.php"><p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">Register for more events</p></a>
                <div class="indicate"><i class="ti-angle-double-down"></i></div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
        <div class="core-container">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm  g-padding-x-0--xs g-padding-x-40--sm g-padding-x-100--md" style="background:rgba(0, 0, 0, 0.4)">
                <div class="row product-grid">
                  <?php
                    $email = $_SESSION['email'];
                    $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');
                    $query = "SELECT * FROM Registrations WHERE Email='$email'";
                    $result = mysqli_query($con,$query);
                    $num = mysqli_num_rows($result);
                    if($num>0){
                      $row = mysqli_fetch_array($result);
                      for($var = 0;$var < 9; $var++ ){
                        if($row[$events[$var]] == 1){
                  ?>
            <a href="<?php echo $events[$var] ?>.php" class="product-card col-xs-12 col-md-5 col-lg-4">
                <div class="product-card__item-grid" style="background:url(img/events/<?php echo $events[$var] ?>.jpg)">
                    <div class="product-card__item-text">
                        <h3 class="g-color--white"><?php echo $events[$var] ?></h3>
                        <p class="g-color--white"><b>Registerations are closed!</b></p>
                        <pclass="g-color--white"><i>#Event</i></p>


                    </div>
                </div>
            </a>
                  <?php }
                      }
                    }
                   ?>
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
<?php }else{
  header('location:login.php');
} ?>
