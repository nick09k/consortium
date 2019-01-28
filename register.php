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
              ID INT(11) UNSIGNED AUTO_INCREMENT,
              Name VARCHAR(255) NOT NULL,
              Email VARCHAR(255) NOT NULL,
              Contact INT(16) NOT NULL,
              Password VARCHAR(255) NOT NULL,
              TeamID VARCHAR(255) NOT NULL,
              Swadesh TINYINT(1) DEFAULT '0',
              AdVenture TINYINT(1) DEFAULT '0',
              'Pitch Perfect' TINYINT(1) DEFAULT '0',
              'renderico' TINYINT(1) DEFAULT '0',
              CEO TINYINT(1) DEFAULT '0',
              'Teen Titans' TINYINT(1) DEFAULT '0',
              BizMantra TINYINT(1) DEFAULT '0',
              BizQuiz TINYINT(1) DEFAULT '0',
              ConsoWorld TINYINT(1) DEFAULT '0')
              ";
  mysqli_query($con,$regquery);

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
    header('location:regnew.php');
  }

  if($con->real_escape_string($_POST['swadesh'])){

  }elseif ($con->real_escape_string($_POST['adventure'])) {

  }elseif ($con->real_escape_string($_POST['pitchperfect'])) {

  }elseif ($con->real_escape_string($_POST['renderico'])) {

  }elseif ($con->real_escape_string($_POST['ceo'])) {

  }elseif ($con->real_escape_string($_POST['teentitans'])) {

  }elseif ($con->real_escape_string($_POST['bizmantra'])) {

  }elseif ($con->real_escape_string($_POST['bizquiz'])) {

  }elseif ($con->real_escape_string($_POST['consoworld'])) {

  }
?>
<?php if($_SESSION['email']){ ?>
<!DOCTYPE html>
<html>
  <?php include("includes/head.php"); ?>
  <body>
    <?php include("includes/header.php"); ?>
    <form class="" action="register.php" method="post">
      <input type="email" name="email" value="" placeholder="Enter your Email ID" />
      <input type="submit" name="consosubmit" value="Next" />
      <input type="submit" name="register" value="I haven't registered yet." />
    </form>

    <?php include("footer.php");?>
  </body>
</html>
<?php }?>
