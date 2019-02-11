<?php
$pagetitle = 'Login | Consortium';
  session_start();
    if(isset($_POST['login1'])) {
      $db_host = "localhost:3306";
      $db_username = "conso";
      $db_pass = "Conso@123";
      $db_name = "conso19";

      $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
      mysqli_select_db($con,$db_name) or die ("no database");

      $email = $con->real_escape_string($_POST['email']);
      $password = $con->real_escape_string($_POST['password']);

      if($email=="" || $password==""){
          $msg =  "Please fill all the details";
      }else{
        $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz','ConsoWorld');
        $query = "SELECT * from Registrations WHERE Email='$email'";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if($num > 0){
          $data = mysqli_fetch_array($result);
          if(password_verify($password,$data['Password'])){
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $data['Name'];
            $_SESSION['contact'] = $data['Contact'];
            $_SESSION['TeamID'] = $data['TeamID'];
            header('location:dashboard.php');
          }else {
            $msg = "Incorrect Password. Please try again.";
          }
        }else{
          $msg = "This email id isn't registered with us. Register <a href='regnew.php'>here</a>.";
        }
      }
    }else {
      echo("Error description: " . mysqli_error($con));
    }
    if(isset($_POST['login2'])){
      header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
<?php include("includes/head.php"); ?>
  <body class="back">
    <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
                <!-- Navbar -->
                <nav class="s-header-v2__navbar">
                    <div class="container g-display-table--lg">
                        <!-- Navbar Row -->
                        <div class="s-header-v2__navbar-row">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="s-header-v2__navbar-col">
                                <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                    <span class="s-header-v2__toggle-icon-bar"></span>
                                </button>
                            </div>

                            <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                                <!-- Logo -->
                                <div class="s-header-v2__logo">
                                    <a href="/" class="s-header-v2__logo-link">
                                        <!--<img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="static/img/E-Cell_white.png" alt="Ecell Logo" height="50">-->
                                        <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="/img/icon.png" alt="StartUp Conclave">
                                    </a>
                                </div>
                                <!-- End Logo -->
                            </div>

                            <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                    <ul class="s-header-v2__nav">
                                        <li class="s-header-v2__nav-item"><a href="index.php" class="s-header-v2__nav-link">Home</a></li>
                                        <li class="s-header-v2__nav-item"><a href="#about" class="s-header-v2__nav-link">About Us</a></li>
                                        <li class="s-header-v2__nav-item"><a href="/partners" class="s-header-v2__nav-link">Partners</a></li>
                                        <li class="s-header-v2__nav-item"><a href="#contact" class="s-header-v2__nav-link">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- End Nav Menu -->
                            </div>
                        </div>
                        <!-- End Navbar Row -->
                    </div>
                </nav>
                <!-- End Navbar -->
            </header>
    <!--========== PROMO BLOCK ==========-->

  <div id="login" class="s-promo-block-v1 g-bg-color--primary-ltr">
      <div class="container g-ver-center--md g-padding-y-100--xs">
          <div class="row g-hor-centered-row--md g-margin-t-20--sm">
              <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                  <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                      <form submit="" action="login.php" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                          <div class="g-text-center--xs g-margin-b-40--xs">
                              <h2 class="g-font-size-30--xs g-color--white">Login</h2>
                              <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                          </div>
                          <div class="g-margin-b-30--xs">
                              <input type="email" name="email" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Email">
                          </div>
                          <div class="g-margin-b-30--xs">
                              <input type="password" name="password" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
                          </div>
                          <div class="g-text-center--xs">
                              <button type="submit" name="login1" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
                              <a href="regnew.php" class="g-color--white g-font-size-13--xs regclass">Not Registered?</a><br>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!--========== END PROMO BLOCK ==========-->
      <?php include("includes/script.php"); ?>
  </body>
</html>
