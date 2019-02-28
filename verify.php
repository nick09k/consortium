<?php
@session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
$pagetitle = 'Verify | Consortium';
$verify = $_SESSION['verify'];

$db_host = "localhost:3306";
$db_username = "conso19";
$db_pass = "Conso@123";
$db_name = "conso19";

$con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysqli_select_db($con,$db_name) or die ("no database");

$email = $con->real_escape_string($_GET['email']);

 if(isset($_SESSION['email'])){
    header('location:dashboard.php');
 }else if(isset($_POST['otp_sub'])) {

  $otpver = $con->real_escape_string($_POST['otp']);

  if($email == ""){
    header('location:regnew.php');
  }
  if($otpver == ""){
    $msg = "Please enter a valid otp";
  }else{
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
}elseif(isset($_POST['resend'])) {
  $otpver = '1234567890';
  $otpver = str_shuffle($otp);
  $otpver = substr($otp, 0, 6);

  $to = $email;

  $subject = "Verify Your Email!";
  $html = "
  <!DOCTYPE html>
      <html>
          <head>
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

              <div style='background: #0b0b0b; padding:10px 30px;'><img src='https://www.ecellvnit.org/img/logo-ecell.png'></div>
              <h2 style='font-size:22px;'>Welcome to Comsortium'19</h2><br>

              <div class='context'>


                  <h3><b>Hello $name,</b></h3>


                  <p>Thank You for registering! You are now a part of one of the India's Biggest Entrepreneurship Summit.</p>
                  <div>
                      <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board.<br/><br/>
                      Your OTP is<br/> <span style='font-size:24px'>$otpver</span></p>
                      For queries and in case of any difficulty, feel free to contact us.<br>
                          <p>
                          With warm regards,<br>
                          E-Cell VNIT
                      </p>


                  </div>
              </div>
          </body>
      </html>

";


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
  if($result = file_get_contents($url, false, $context)){
    $msg = "An OTP is sent to your registered email id. Please enter the OTP below to confirm your email address.";
  }
  if ($result === FALSE) {
    $msg = "We are facing problem in sending email. Please contact our <a href='https://www.ecellvnit.org/team.php' >team.</a>";
  }
}
?>

<!DOCTYPE html>
<html>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <!-- <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p> -->
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Verify Your Email ID</h2>
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
                <button type='submit' name='resend' class='text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs'>Resend OTP</button>
              </form>
            </div>

        </div>
    </div>
    <?php include("includes/footer.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>
