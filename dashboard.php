<?php
  @session_start();
  error_reporting(E_ALL);
    ini_set('display_errors', '1');
  $db_host = "localhost:3306";
  $db_username = "conso19";
  $db_pass = "Conso@123";
  $db_name = "conso19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

  // Connected


  if(isset($_SESSION['email'])){

    $email = $_SESSION['email'];

    if(isset($_POST['swanewmem'])){
      $name2 = $con->real_escape_string($_POST['name']);
      $email2 = $con->real_escape_string($_POST['email']);
      $contact2 = $con->real_escape_string($_POST['contact']);

      if($name2 == "" || $email2 == "" || $contact2 == "" ){
        $msg = "Please fill all the details";
      }else{
        $query = "SELECT * from Registrations where Email='$email'";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);

        if($num == 0){
          $query = "INSERT INTO Swadesh(Name,Main_Email,Email,Contact) VALUES('$name2','$email','$email2','$contact2')";
          if(mysqlii_query($con,$query)){
            $msg = "User added successfully";
          }else{
            echo("Error description: " . mysqli_error($con));
          }
        }else{
          $query = "UPDATE Swadesh SET Main_Email='$email' WHERE Email = '$email2'";
          if(mysqli_query($con,$query)){
            $msg = "User added successfully";
          }else{
            echo("Error description: " . mysqli_error($con));
          }
        }
      }
    }
  }
  else{

    $_SESSION['login_error'] = "Kindly Login First";

    header('location:/login.php');
  }


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
        <div class="g-bg-position--center js__parallax-window" style="background:#000;height:100vh;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Dashboard</h2>
                <a href="register.php"><p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">Register for more events</p></a>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                <div class="indicate"><i class="ti-angle-double-down"></i></div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Events -->
        <div class="core-container">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm  g-padding-x-0--xs g-padding-x-40--sm g-padding-x-100--md" style="background:rgba(0, 0, 0, 0.4)">
                <div class="row product-grid">
                  <?php
                    $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');
                    $query = "SELECT * FROM Registrations WHERE Email='$email'";
                    $result = mysqli_query($con,$query);
                    $num = mysqli_num_rows($result);
                    if($num>0){
                      $row = mysqli_fetch_array($result);
                      for($var = 0;$var < 9; $var++ ){
                        if($row[$events[$var]] == 1){
                  ?>
                    <a id="<?php echo $events[$var] ?>click" class="product-card col-xs-12 col-md-5 col-lg-4" style="cursor:pointer;">
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

        <div class="" id="Swadesh" style="display:none;">
          <p>Your team:
          <?php
            $query = "SELECT * FROM Swadesh WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            while($row = mysqli_fetch_array($result)){
          ?>
          <?php echo $row['Name']; ?> <br/>
          <?php }
            if($num < 4){
            ?>
            Add a member to your team:
            <form class="center-block g-width-500--sm g-width-550--md" method="post" action="dashboard.php">
                <div class="permanent">
                    <div class="g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Full Name" name="name" style="text-transform: none" id="name">
                    </div>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="email" style="text-transform: none" id="email">
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="tel" class="form-control s-form-v3__input" placeholder="* Contact" name="contact" style="text-transform: none">
                        </div>
                    </div>
                </div>

                <div class="g-text-center--xs">
                    <button type="submit" name="swanewmem" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                </div>
            </form>
          <?php
            }
          ?>
          </p>
        </div>

        <div class="" id="AdVenture">

        </div>

        <div class="" id="Pitch_Perfect">

        </div>

        <div class="" id="BizMantra">

        </div>

        <div class="" id="BizQuiz">

        </div>

        <div class="" id="CEO">

        </div>

        <div class="" id="Teen_Titans">

        </div>

        <div class="" id="renderico">

        </div>

        <div class="" id="ConsoWorld">

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
        <script type="text/javascript">
        $("#Swadeshclick").click(function(){
          $("#Swadesh").css({"display":"block"});
          $("#Swadesh").animate({opacity: 1}, 1000);
        });
        </script>
    </body>
    <!-- End Body -->
</html>

