<?php
session_start();
$pagetitle = 'Register | Consortium';
error_reporting(E_ALL);
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
              TeamID VARCHAR(255) NOT NULL,
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
    if(mysqli_query($con,$evequery)){
      echo "CONGO";
    }else {
      echo("Error description: " . mysqli_error($con));
    }
  }

  if($_SESSION['email']){
    $email = $_SESSION['email'];

    $query = "SELECT * FROM Registrations WHERE Email='$email'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num == 0){
      $msg = "Please <a href='regnew.php'>REGISTER</a> before you continue.";
    }else{
      $data = mysqli_fetch_array($result);
      $select_event = "
        <form action='register.php' method='get'>
        <select name='event'>
          <option value='' selected disabled hidden>Choose an Event</option>
          <option value='swadesh'>Swadesh</option>
          <option value='adventure'>AdVenture</option>
          <option value='pitchperfect'>Pitch Perfect</option>
          <option value='renderico'>render.ico</option>
          <option value='ceo'>CEO</option>
          <option value='teentitans'>Teen Titans</option>
          <option value='bizmantra'>BizMantra</option>
          <option value='bizquiz'>BizQuiz</option>
          <option value='consoworld'>ConsoWorld</option>
        </select>
        <input type='submit' name='event' value='Next'>
        </form>";
    }

  }else{
    header('location:login.php?ref=1');
  }
?>
<?php if($_SESSION['email']){ ?>
<!DOCTYPE html>
<html>
  <?php include("includes/head.php"); ?>
  <body class="back" style="padding-top:70px;">
    <?php include("includes/header.php"); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"></p>
            </div>
            <form class="center-block g-width-500--sm g-width-550--md" method="post" action="regnew.php">
                <div class="permanent">
                    <div class="g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Full Name" name="name" style="text-transform: none" id="name">
                    </div>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="email" style="text-transform: none" id="email">
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="tel" class="form-control s-form-v3__input" placeholder="* Contact" name="name" style="text-transform: none">
                        </div>
                    </div>
                </div>

                <div class="g-text-center--xs">
                    <button type="submit" name="regnew" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button>
                </div>
            </form>
        </div>
    </div>
    <form class="" action="register.php" method="post">
      <input type="email" name="email" value="" placeholder="Enter your Email ID" />
      <input type="submit" name="consosubmit" value="Next" />
    </form>
    <a href="regnew.php">I haven't registered yet.</a>

    <?php include("includes/footer.php");?>
  </body>
</html>
<?php }?>
