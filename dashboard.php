<?php
  @session_start();
  // error_reporting(E_ALL);
  //   ini_set('display_errors', '1');
  $db_host = "localhost:3306";
  $db_username = "conso19";
  $db_pass = "Conso@123";
  $db_name = "conso19";
  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");



  function htmlMail($t, $sub, $name, $teamname){


    $to = $t;

    $subject = $sub;
    $html = '
    <!DOCTYPE html>
        <html>
            <head>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>

    <script>window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag("js", new Date());

          gtag("config", "UA-125403862-1");
      </script>
      <title>Email-Template</title>
                <style>


                    li{
                        padding:10px;
                    }
                    p{
                        font-size:16px;
                    }

                    *{
                        font-family:Helvetica,Arial,sans-serif;
                    }

                    h2{
                        text-align: center;
                        margin-top: 150px;

                    }
                    html, body{
                        background-color:#f7f9fb;
                        margin: 0;
                    }
                    .context {
                        font-size: 12px;
                        padding: 40px 60px;
                        margin-left:10%;
                        margin-right: 10%;
                    }

                    .context p{
                        font-size: 12px;
                    }
                    p{
                        margin: 15px 0px;
                    }

                </style>
            </head>
            <body>

                <div style="background: #0b0b0b; padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
                <h2 style="font-size:22px;">Welcome to Swades!</h2><br>

                <div class="context">
                    <h3><b>Hello '.$name.',</b></h3>


                    <p>Thank You for registering team <b>'.$teamname.'</b></p>
                    <div>
                        <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>Swades</b></p>
                        <p>
                            Here is your way to the first step towards the journey of bringing about social change. Get ready to ignite your entrepreneurial mindset to solve problems affecting over 70% of Indian residents.<br>
                            <br>
                        </p>
                        <br>

                          <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://goo.gl/forms/xXRcPeOWCat1gGtr1">Questionnaire</a>

                        <p>
                          <br>
                          <p>To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>For queries and in case of any difficulty, feel free to contact us.</p>
                          <br>

                          <br>
                            With warm regards,<br>
                            Anushree Rungta<br>
                            Core-Coordinator, Ecell VNIT
                        </p>
                    </div>
                </div>
            </body>
        </html>';


    $url = 'https://startupconclave.ecellvnit.org/send';
    $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'intheend');

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        $msg = 'We are facing problem in sending email. Please use this link to pay your registration fees.';
    }

  }
  
  // Connected
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    if(isset($_POST['swanewmem'])){


      // Adding Team First
      $teamname = $con->real_escape_string($_POST['teamname']);
      $teamemail = $_SESSION['email'];
      $contact = $_SESSION['contact'];
      $query = "INSERT INTO Swadesh_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
      if(mysqli_query($con,$query)){
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);

        for($i=1; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO Swadesh(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | Swades19';
            htmlMail($memberemail,$s,$membername,$teamname);
            
          }else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }
        
        

      }else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "Registration Successful. All the relevant details have been mailed to you.";
      header('location:/dashboard.php');
      
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
                <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">
                  <?php if(isset($msg)) {echo $msg;} ?></p>
                  <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php  if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; }?></p>
            </div>
        </div>
        
        <!--========== END PROMO BLOCK ==========-->
        <!--========== PAGE CONTENT ==========-->
        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="details" style="background:rgba(255, 255, 255,1);">
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
                <h5 class="g-color--dark">Registered Events</h5><br/>
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
              echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
              $query = "SELECT * FROM Swadesh WHERE Main_Email='$email'";
              $result = mysqli_query($con,$query);
              $num = mysqli_num_rows($result);
              echo "<ol>";
              while($row = mysqli_fetch_array($result)){
                echo "<li class='g-color--white'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }
              echo "</ol>";
            }
            else{
            ?>
            
            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent row">
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
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