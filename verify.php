<?php
@session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
require_once('includes/mailing.php');
$pagetitle = 'Verify | Consortium';
$verify = $_SESSION['verify'];

$db_host = "localhost:3306";
$db_username = "conso20";
$db_pass = "Conso@123";
$db_name = "conso20";

$con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysqli_select_db($con,$db_name) or die ("no database");

$email = $con->real_escape_string($_GET['email']);

if(isset($_SESSION['email'])){
    header('location:dashboard.php');
}

else if(isset($_POST['otp_sub'])) {

  $otpver = $con->real_escape_string($_POST['otp']);

  if($email == ""){
    header('location:regnew.php');
  }
  if($otpver == ""){
    $msg = "Please enter a valid otp";
  }
  else{
    $query = "SELECT * from Registrations where Email='$email'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num >0){
      $data = mysqli_fetch_array($result);
      if($data['otp'] == $otpver){
        $q = "UPDATE Registrations SET otp='Confirmed' WHERE Email = '$email'";
        if(mysqli_query($con,$q)){
          $_SESSION['login_error'] = "Your email has been verified! You can Login now";
        }else{
          $_SESSION['login_error'] = "Error description: " . mysqli_error($con);
        }
        // $_SESSION['login_error'] = "Your email has been verified! You can Login now";
        header('location:login.php');
      }else{
        $msg = "Your OTP is incorrect. Please try again.";
      }
    }else{
      echo("Error description: " . mysqli_error($con));
    }
  }
}

elseif(isset($_POST['resend'])) {


  $otp = '1234567890';
  $otp = str_shuffle($otp);
  $otp = substr($otp, 0, 6);

  $q = "UPDATE Registrations SET otp='$otp' WHERE Email = '$email'";

  if(mysqli_query($con,$q)){

    $msg = "An OTP is sent to your registered email id. Please enter the OTP below to confirm your email address.";
    $s = "Verify your Email | E-Cell VNIT Nagpur";
    $_SESSION['verify'] = "Welcome. An OTP is sent to your registered email id. Please enter the OTP below to confirm your email address.";
    htmlMail($email,$s,$name,$otp, 'otp');
    header('location:verify.php?email='.$email.'');
  }
  else{
    $msg = "Something Went Wrong";
  }


}
?>

<!DOCTYPE html>
<html>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register" style="min-height: 90vh; display: flex; align-items: center;">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <!-- <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p> -->
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Kindly Verify Your Email ID</h2>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $verify; ?></p>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs" id="message"></p>
            </div>
            <div class="g-text-center--xs">
              <form class="center-block g-width-500--sm g-width-550--md" method="post" action="verify.php?email=<?php echo $email ?>">
                  <div class='permanent'>
                    <div class='g-margin-b-30--xs'>
                      <input type='text' class='form-control s-form-v3__input' placeholder='* Your OTP' name='otp' style='text-transform: none' id='otp'>
                    </div>
                  </div>

                  <div class='g-text-center--xs'>
                    <button type='submit' name='otp_sub' class='text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs'>Submit</button>
                  </div>
              </form>

              <form class='center-block g-width-500--sm g-width-550--md' method='post' action='verify.php?email=<?php echo $email ?>'>
                <button type='submit' name='resend' class='text-uppercase s-btn g-radius--50 g-padding-x-20--xs g-margin-b-20--xs'>Resend OTP</button>
              </form>
            </div>

        </div>
    </div>
    <?php include("includes/footer.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>
