<?php
  session_start();

  $db_host = "localhost:3306";
  $db_username = "conso19";
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

  mysqli_query($con,$regquery);

  if(isset($_POST['register'])){
    $startup = $con->real_escape_string($_POST['startup']);
    $desc = $con->real_escape_string($_POST['desc']);
    $email = $con->real_escape_string($_POST['email']);
    $website = $con->real_escape_string($_POST['website']);
    $phone = $con->real_escape_string($_POST['phone']);
    $hiring = $con->real_escape_string($_POST['hiring']);

    if($startup=="" || $desc=="" || $email=="" || $website=="" || $phone=="" || $hiring==""){
        $msg = "Please fill all the details. <a href='expo.php' style='color:#eee;'>Try Again</a>";
    }else{
      $query = "SELECT * from Expo where Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);

      if($num!=0){
        $msg = "Your startup is already registered.";
      }else{
        $q = "INSERT INTO Expo(Startup,Description,Email,Website,Phone,Hiring) VALUES('$startup','$desc','$email','$website','$phone','$hiring')";
        if(mysqli_query($con,$q)){
          $msg = "You are registered with us. We will contact you within 24 hours.";
          $to = $email;
          $subject = "Welcome To The Startup Expo | Consortium'19";
          $html = '
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

                      <div style="background: #0b0b0b; padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
                      <h2 style="font-size:22px;">Welcome to Startup Expo</h2><br>

                      <div class="context">
                          <h3><b>Hello '.$startup.',</b></h3>


                          <p>Thank You for registering! You are now a part of Central India’s Biggest Entrepreneurship Summit.</p>
                          <div>
                              <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for this event.</p>
                              <p>
                                  To keep you updated, all the relevant details will be e-mailed to you very shortly.
                                  Over this month, you will get access to plenty of valuable resources, which will help you guide your way through this program.<br>
                                  For queries and in case of any difficulty, feel free to contact us.<br>
                              </p>
                              <p>
                                  With warm regards,<br>
                                  Anushree Rungta<br>
                                  Core-Coordinator, Ecell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>
      ';


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
          if ($result === FALSE) { /* Handle error */ }


        }else{
          $msg = "Something went Wrong. <a href='expo.php' style='color:#eee;'>Try Again</a>";
        }
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
