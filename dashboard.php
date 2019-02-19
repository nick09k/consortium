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



  function htmlMail($t, $sub, $name, $teamname, $event){


    $to = $t;

    $subject = $sub;
    $htmlSwadesh = '
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



        $htmlRenderico = '
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
                <h2 style="font-size:22px;">Welcome to Render.ico!</h2><br>

                <div class="context">
                    <h3><b>Hello '.$name.',</b></h3>


                    <p>Thank You for registering team <b>'.$teamname.'</b></p>
                    <div>
                        <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>Render.ico</b></p>
                        <p>
                            Here is your way to the first step towards the journey of express yourself and know where you stand for within the strokes and shades of a company logo?<br>
                            <br>
                        </p>
                        <br>

                          <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://goo.gl/forms/xXRcPeOWCat1gGtr1">Problem Statement</a>

                        <p>

                        <br>
                        <p>Note: The Logo to be submitted should be in the form of: .jpeg or .png or .psd or .ai .<br> For more information visit website.</p>


                          <br>
                          <p>To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>For queries and in case of any difficulty, feel free to contact us.</p>
                          <br>

                          <br>
                            With warm regards,<br>
                            Team Render.ico<br>
                            Consortium 19, Ecell VNIT
                        </p>
                    </div>
                </div>
            </body>
        </html>';


    $html = "";
    if($event == 'Swadesh'){
      $html = $htmlSwadesh;
    }

    else if($event == 'renderico'){
      $html = $htmlRenderico;
    }
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
        $s = 'Welcome Aboard Team '.$teamname.' | Swades19';

        htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'Swadesh');
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);


        for($i=2; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO Swadesh(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | Swades19';
            htmlMail($memberemail,$s,$membername,$teamname, 'Swadesh');

          }
          else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }

      }else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "You've registered successfully. Check your email, to begin with the first round of Swades which is a questionnaire.";
      header('location:dashboard.php');

    }

    if(isset($_POST['swanewmem-renderico'])){


      // Adding Team First
      $teamname = $con->real_escape_string($_POST['teamname']);
      $teamemail = $_SESSION['email'];
      $contact = $_SESSION['contact'];
      $query = "INSERT INTO renderico_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
      if(mysqli_query($con,$query)){
        $s = 'Welcome Aboard Team '.$teamname.' | Render.ico';

        htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'renderico');
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);


        for($i=2; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO renderico(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | Render.ico';
            htmlMail($memberemail,$s,$membername,$teamname, 'renderico');

          }
          else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }

      }else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "You've registered successfully. Check your email, to begin with the first round of Render.ico.";
      header('location:dashboard.php');

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
                  <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-color--white g-letter-spacing--2 g-margin-b-25--xs"><?php  if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; }?></p>
            </div>
        </div>

        <!--========== END PROMO BLOCK ==========-->
        <!--========== PAGE CONTENT ==========-->
        <div class="container g-padding-x-40--sm g-padding-x-0--xs g-padding-y-20--xs g-padding-y-50--sm" id="details" style="background:rgba(255, 255, 255,1);">
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
                <div class="row product-grid">

                  <?php
                    $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','Brainathon');
                    $query = "SELECT * FROM Registrations WHERE Email='$email'";
                    $result = mysqli_query($con,$query);
                    $num = mysqli_num_rows($result);
                    if($num>0){
                      echo "<p class='g-color--dark g-font-size-16--xs'>Your registered events will be shown here.</p><br/>";
                      $row = mysqli_fetch_array($result);
                      for($var = 0;$var < 9; $var++ ){
                        if($row[$events[$var]] == 1){
                  ?>
                    <a href="<?php if($events[$var] == 'Brainathon'){echo'/paybrain.php';}else{echo '#'.$events[$var].'click';} ?>" id="<?php echo $events[$var] ?>click" class="product-card col-xs-12 col-md-3" style="cursor:pointer;">
                        <div class="product-card__item-grid" style="background:url(img/events/<?php echo $events[$var] ?>.jpg)">
                            <div class="product-card__item-text-v2">
                              <h2 class="g-color--white g-text-center--xs g-font-size-16--xs"><?php echo $events[$var] ?></h2>

                              
                              <p class="g-color--white g-text-center--xs g-font-size-14--xs">
                                <?php

                                if($events[$var] != "Brainathon"){
                                  echo 'Edit Your Team Members';
                                }
                                else{

                                  $query = "SELECT * FROM Brainathon WHERE Email = '$email'";
                                  $result = mysqli_query($con,$query);
                                  $data = mysqli_fetch_assoc($result);

                                  if($data['isPaid'] == 1){
                                    echo 'Your are successfully registered.';
                                  }
                                  else{
                                      echo 'You have not paid your registration fee. Click here to proceed.';
                                  }

                                }
                                 
                                 ?> 

                              </p>

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
                <a href="register.php"><p class="g-font-size-14--xs g-color--red g-letter-spacing--2 g-margin-b-25--xs">Register for more events</p></a>
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

          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('Swadesh');" style="position:absolute; left:90%" >X</a>
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
              echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
              while($row = mysqli_fetch_array($result)){
                echo "<li class='g-color--white'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }
              echo "</ol>";
            }
            else{
            ?>

            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent permanent-Swadesh row">
                  <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default</p>
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                    </div>

                    <div class="col-sm-6 g-margin-b-30--xs">
                        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-Swadesh">
                            <option value="" selected="" disabled="" hidden="">Add more members</option>
                            <option value="2" style="color:black">1</option>
                            <option value="3" style="color:black">2</option>
                            <option value="4" style="color:black">3</option>

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


        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="renderico" style="display:none;background: #000">

          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('renderico');" style="position:absolute; left:90%" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Render.ico</h2>


          <?php
            $query = "SELECT * FROM renderico_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
              $query = "SELECT * FROM renderico WHERE Main_Email='$email'";
              $result = mysqli_query($con,$query);
              $num = mysqli_num_rows($result);
              echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
              while($row = mysqli_fetch_array($result)){
                echo "<li class='g-color--white'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }
              echo "</ol>";
            }
            else{
            ?>

            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent permanent-renderico row">
                  <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default. One can also participate as a single member team.</p>
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                    </div>

                    <div class="col-sm-6 g-margin-b-30--xs">
                        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-renderico">
                            <option value="" selected="" disabled="" hidden="">Add more members</option>
                            <option value="1" style="color:black">0 (Single Member)</option>
                            <option value="2" style="color:black">1</option>
                            
                        </select>
                    </div>


                </div>
                <div class="g-text-center--xs">
                    <button type="submit" name="swanewmem-renderico" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
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
            $("html ,body").animate({ scrollTop: y},200);
        });

        function closemodel(event){
            $("#"+event).css({"display": "none"},100);
        }



        $("#rendericoclick").click(function(){
          $("#renderico").css({"display":"block"});
          $("#renderico").animate({opacity: 1}, 1000);
          var y = $("#renderico").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });

        

        </script>


    </body>
    <!-- End Body -->
</html>
