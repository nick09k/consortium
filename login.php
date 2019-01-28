<?php
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
    session_start();
    $db_host = "localhost:3306";
    $db_username = "conso";
    $db_pass = "Conso@123";
    $db_name = "conso19";

    $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
    mysqli_select_db($con,$db_name) or die ("no database");
?>

<!DOCTYPE html>
<html>
  <?php include('head.php'); ?>
  <body>
    <?php include('header.php'); ?>

    <?php if($con->real_escape_string($_POST['login'])){
        $email = $con->real_escape_string($_POST['email']);
        $password = $con->real_escape_string($_POST['password']);

        if($email=="" || $password==""){
          $msg =  "Please fill all the details";
        }else{
          $query = "SELECT * FROM Registrations WHERE Email = $email";
          $result = mysqli_query($con,$query);
          $num = mysqli_num_rows($result);
          if($num != 0){
            $data = mysqli_fetch_array($result);
            if(password_verify($password,$data['Password'])){
              $events = array('Swadesh','AdVenture','Pitch Perfect','renderico','CEO','Teen Titans','BizMantra','BizQuiz','ConsoWorld');
              $output = "
                <div class=''>
                  <form action='register.php' method='post'>
                  <p>Hi! Please select an event to continue.</p>
                </div>
                ";
              for($var = 0;$var < 9; $var++ ){
                if($data[$events[$var]] == 1){
                  $output2 = "<input type='checkbox' name='.$events[$var].' value='.$events[$var].'>";
                }
              }
              $output3 = "<input type='submit' name='log' value='Login'>
                </form>";
            }else{
              $msg = "Please check your inputs.";
            }
          }else{
            $msg = "Your email isn't registered with us.";
          }
        ?>
      <?php }
          }else{ ?>
          <form class="" action="login.php" method="post">
            <input type='email' name='email' value='' placeholder='*Your Email'>
            <input type='password' name='password' value='' placeholder='*Your Password'>
            <input type="submit" name="login">Next</button>
          </form>
      <?php } ?>
      <?php echo $msg; ?>

    <?php include('footer.php'); ?>
  </body>
</html>
