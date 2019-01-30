<?php
$pagetitle = 'Login | Consortium';
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
    $db_host = "localhost:3306";
    $db_username = "conso";
    $db_pass = "Conso@123";
    $db_name = "conso19";

    $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
    mysqli_select_db($con,$db_name) or die ("no database");
?>

<!DOCTYPE html>
<html>

  <body style="padding-top:100px;">

    <!--========== PROMO BLOCK ==========-->
    <div id="login" class="s-promo-block-v1 g-bg-color--primary-ltr">
        <div class="container g-ver-center--md g-padding-y-100--xs">
            <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <p class="g-text-center--xs text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">{{error}}</p>
                        <form submit="" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                            <div class="g-text-center--xs g-margin-b-40--xs">
                                <h2 class="g-font-size-30--xs g-color--white">Login here</h2>
                                <h2 class="g-font-size-20--xs g-color--white"><?php echo $msg; ?></h2>
                            </div>
                            <div class="g-margin-b-30--xs">
                                <input type="email" name="email" class="form-control s-form-v3__input" placeholder="* Email">
                            </div>
                            <div class="g-margin-b-30--xs">
                                <input type="password" name="pass" class="form-control s-form-v3__input" placeholder="* Password">
                            </div>
                            <div class="g-text-center--xs">
                                <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
                                <a class="g-color--white g-font-size-13--xs regclass" id="reg_button" >Not Registered?</a><br>
                                <a class="g-color--white g-font-size-13--xs" href="/forgot">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(isset($_POST['login'])){
        $email = $con->real_escape_string($_POST['email']);
        $password = $con->real_escape_string($_POST['password']);

        if($email=="" || $password==""){
          $msg = "Please fill all the details";
        }else{
          $query = "SELECT * FROM Registrations WHERE Email = '$email'";
          $result = mysqli_query($con,$query);
          $num = mysqli_num_rows($result);
          if($num == 1){
            $data = mysqli_fetch_array($result);
            if(password_verify($password,$data['Password'])) {
              $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');
              $msg = "
                <div class=''>
                  <form action='register.php' method='post'>
                  <select type="email" name="type" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Type">
                      <option value="0">Team</option>
                      <option value="1">Member</option>
                      <option value="2">Reference</option>
                      <option value="3">Questionnaire</option>
                  </select>
                  <p>Hi! Please select an event to continue.</p>
                </div>
                ";
              for($var = 0;$var < 9; $var++ ){
                if($data[$events[$var]] == 1){
                  $msg = "<input type='checkbox' name='.$events[$var].' value='.$events[$var].'>";
                }
              }
              $msg = "<input type='submit' name='log' value='Login'>
                </form>";
            }else{
              echo("Error description: " . mysqli_error($con));
            }
          }else{
            $msg = "Your email isn't registered with us.";
          }
        ?>
      <?php }
          }else{ ?>
          <form action="login.php" method="post">
            <input type='email' name='email' value='' placeholder='*Your Email' />
            <input type='password' name='password' value='' placeholder='*Your Password' />
            <input type="submit" name="login" value="Next" />
          </form><br/>
          <a href="regnew.php">Haven't registered yet?</a>
      <?php } ?>

  </body>
</html>
