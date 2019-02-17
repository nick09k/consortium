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
    <body>

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="core-container">
        <div class="g-bg-position--center js__parallax-window" style="background:#000;height:auto;">
            <div class="g-container--md g-text-center--xs g-padding-y-40--xs">
                <h2 class="g-font-size-30--xs g-font-size-40--sm g-font-size-50--md g-margin-t-70--xs g-color--white g-letter-spacing--1">Dashboard</h2>
            </div>
        </div>
        
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="details" style="background:rgba(255, 255, 255,0.97);">

            <div class="card" id="event-card-bg">
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#why" id="but_why">YOUR EVENTS</a></li>
                <li class="tab"><a  href="#structure" id="but_structure">TICKETS</a></li>
                
              </ul>
            </div>
            <div class="card-content code">

              <div id="why">
                <br>
                <h5><b>Registered Events</b></h5><br/>
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
                    <a id="<?php echo $events[$var] ?>click" class="product-card col-xs-12 col-md-3" style="cursor:pointer;">
                        <div class="product-card__item-grid" style="background:url(img/events/<?php echo $events[$var] ?>.jpg)">
                            <div class="product-card__item-text">
                                <h3 class="g-color--white"><?php echo $events[$var] ?></h3>
                                
                                <pclass="g-color--white"><i>#Event</i></p>
                            </div>
                        </div>
                    </a>
                  <?php }
                      }
                    }
                   ?>
                 </div>

                <br/>
                <br>
                <a href="register.php"><p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">Register for more events</p></a>
                <br>

            </div>
            <div id="structure" style="display:none;">
              <h5><b>Counter will be open soon</b></h5>
              <br/>
              

              </div>
              

            </div>
      </div>
        </div>
      </div>


        <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="Swadesh" style="display:none;background: #000">


          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Swades</h2>

          <?php


            $query = "SELECT * FROM Swadesh_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);

            if($num!=0){

              echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">'.$data['Name'].'</h2>';

              $query = "SELECT * FROM Swadesh WHERE TeamID='$email'";
            
              $num = mysqli_num_rows($result);

              echo "<ol>";
              while($row = mysqli_fetch_array($result)){

                echo "<li>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }

            }

            else{
            ?>
            
            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent row">
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="name" style="text-transform: none" id="teamname">
                    </div>

                    <div class="col-sm-6 g-margin-b-30--xs">
                        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* No. of members" id="members">
                            <option value="" selected="" disabled="" hidden="">Number of members</option>
                            <option value="2" style="color:black">2</option>
                            <option value="3" style="color:black">3</option>
                            <option value="4" style="color:black">4</option>
                            <option value="5" style="color:black">5</option>
                        </select>
                    </div>

                    
                </div>
                <div class="g-text-center--xs">
                    <button type="submit" name="swanewmem" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
                </div>
            </form>
          <?php
            }
          ?>
          
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
        <?php include("includes/script.php");?>

        
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
          var y = $("#Swadesh").offset().top;
            $("html ,body").animate({ scrollTop: y},800);

        });
        </script>


    </body>
    <!-- End Body -->
</html>

