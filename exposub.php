<?php
  session_start();

  $db_host = "localhost:3306";
  $db_username = "conso";
  $db_pass = "Conso@123";
  $db_name = "conso19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

  $regquery ="CREATE TABLE IF NOT EXISTS Expo(
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Startup VARCHAR(255) NOT NULL,
    Description VARCHAR(1000) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Website VARCHAR(255) NOT NULL,
    Phone VARCHAR(16) NOT NULL,
    Hiring TINYINT(1) NOT NULL
  )";

  if(mysqli_query($con,$regquery)){
    $msg ="yay";
  }else{
    echo("Error description: " . mysqli_error($con));
  }

  if(isset($_POST['register'])){
    $startup = $con->real_escape_string($_POST['startup']);
    $desc = $con->real_escape_string($_POST['desc']);
    $email = $con->real_escape_string($_POST['email']);
    $website = $con->real_escape_string($_POST['website']);
    $phone = $con->real_escape_string($_POST['phone']);
    $hiring = $con->real_escape_string($_POST['hiring']);

    $query = "SELECT * from Registrations where Email='$email'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num!=0){
      $msg = "Your startup is already registered.";
    }else{
      $q = "INSERT INTO Expo(Startup,Description,Email,Website,Phone,Hiring) VALUES('$startup','$desc','$email','$website','$phone','$hiring')";
      if(mysqli_query($con,$q)){
        $msg = "You are registered with us. We will contact you within 24 hours.";
      }else{
        echo("Error description: " . mysqli_error($con));
      }
    }
  }
?>

<!DOCTYPE html>
<html>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-text-center--xs g-margin-b-60--xs" style="padding-bottom:10em; padding-top:10em;">
                <!-- <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p> -->
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white"><?php echo $msg; ?></h2>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>
