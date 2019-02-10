<?php
session_start();
$pagetitle = 'Register | Consortium';
error_reporting(E_ALL);
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$contact = $_SESSION['contact'];
ini_set('display_errors', 1);
  $db_host = "localhost:3306";
  $db_username = "conso";
  $db_pass = "Conso@123";
  $db_name = "conso19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

  $regquery = "CREATE TABLE IF NOT EXISTS Registrations(
              ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              Name VARCHAR(255) NOT NULL,
              Email VARCHAR(255) NOT NULL,
              Contact VARCHAR(255) NOT NULL,
              Password VARCHAR(255) NOT NULL,
              Swadesh TINYINT(1) DEFAULT '0',
              AdVenture TINYINT(1) DEFAULT '0',
              Pitch_Perfect TINYINT(1) DEFAULT '0',
              renderico TINYINT(1) DEFAULT '0',
              CEO TINYINT(1) DEFAULT '0',
              Teen_Titans TINYINT(1) DEFAULT '0',
              BizMantra TINYINT(1) DEFAULT '0',
              BizQuiz TINYINT(1) DEFAULT '0',
              ConsoWorld TINYINT(1) DEFAULT '0')
              ";

  mysqli_query($con,$regquery);

  $eve = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');
  for($var = 0; $var < 9; $var++){
    $evequery = "CREATE TABLE IF NOT EXISTS $eve[$var](
              ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              Name VARCHAR(255) NOT NULL,
              Email VARCHAR(255) NOT NULL,
              Contact VARCHAR(255) NOT NULL,
              TeamID INT(11) NOT NULL
              )";
    mysqli_query($con,$evequery);
  }

  if(isset($_POST['sub_event'])) {
    $event = $con->real_escape_string($_POST['event']);

    if($event == ""){
      $msg = "Please Select an event!";
    }else{
      $query = "SELECT * FROM Registrations WHERE Email = '$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);

      if($num > 0){
        $data = mysqli_fetch_array($result);
        if($data[$event] != 1){
          $q1 = "UPDATE Registrations SET $event = 1";
          mysqli_query($con,$q1);

          $q2 = "INSERT INTO $event(Name,Email,Contact) VALUES('$name','$email','$contact')";
          mysqli_query($con,$q2);

          $msg = "You have successfully registered for the event. View your <a href='dashboard.php'>Dashboard</a>.";
        }else{
          $msg = "You have already registered for the event! Visit your <a href='dashboard.php'>Dashboard</a>.";
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html>
  <?php include("includes/head.php"); ?>
  <body class="back">
    <?php include("includes/header.php"); ?>
    <?php if($_SESSION['email']){ ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Register for an event</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                <!-- <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"></p> -->
            </div>
            <form class="center-block g-width-500--sm g-width-550--md" method="post" action="register.php">
                <div class="permanent">
                  <select pattern="[0-9]{11}" class="form-control s-form-v3__input g-margin-b-30--xs" name="event" placeholder="* No. of members" id="members" >
                      <option value='' selected disabled hidden>Choose an Event</option>
                      <option value='Swadesh'>Swadesh</option>
                      <option value='AdVenture'>AdVenture</option>
                      <option value='Pitch_Perfect'>Pitch Perfect</option>
                      <option value='renderico'>render.ico</option>
                      <option value='CEO'>CEO</option>
                      <option value='Teen_Titans'>Teen Titans</option>
                      <option value='BizMantra'>BizMantra</option>
                      <option value='BizQuiz'>BizQuiz</option>
                      <option value='ConsoWorld'>ConsoWorld</option>
                  </select>
                </div>

                <div class="g-text-center--xs">
                    <button type="submit" name="sub_event" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Next</button>
                </div>
            </form>
        </div>
    </div>
    <?php }else{ ?>
      <div id="register">
          <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
              <div class="g-text-center--xs g-margin-b-60--xs">
                  <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Register for an event</p>
                  <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                  <!-- <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">Login to register for an event</p> -->
                  <!-- <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"></p> -->
              </div>
              <div class="g-text-center--xs">
                  <a href="regnew.php"><button name="events" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button></a>
                  <a href="login.php"><button name="events" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Login</button></a>
              </div>
          </div>
      </div>
      <?php } ?>

      <?php include("includes/footer.php");?>
    </body>
  </html>

  <?php

  ?>
