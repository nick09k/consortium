<?php
session_start();
if( $_SERVER['REQUEST_METHOD'] == 'POST' or $_SESSION['auth'])
{
    $event = $_POST['event'];
    $type = $_POST['type'];
    $pass = $_POST['pass'];
    if( empty($event) || empty($type) || empty($pass)) {
        $msg = "ERROR: Please enter username!";
    }


    if( $type == 0 && $pass == "LINKINpark@123" ){
        // Authentication successful - Set session
        $_SESSION['auth'] = true;
        $_SESSION['event'] = $event;
        // setcookie("username", $_POST['name'], time()+(84600*30));
        header('Location: database.php');
        exit;
    }
    else if( $type == 1 && $pass == "intheend" ){
        // Authentication successful - Set session
        

        if($event == 'Townhall' || $event == 'Expo' || $event == 'Azure' || $event == 'Brainathon'){
            $msg = "ERROR: Access Denied!";

        }
        else{
            $_SESSION['auth'] = true;
            $_SESSION['event'] = $event;
            // setcookie("username", $_POST['name'], time()+(84600*30));
            header('Location: database.php');
            exit;
        }
        
    }
    else {
        $msg = "ERROR: Invalid Relationship!";
    }
}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php include("includes/head.php"); ?>
    <!-- End Head -->

    <!-- Body -->
    <body class="black">

        <!--========== HEADER ==========-->
        <?php include("includes/header.php"); ?>
        <!--========== END HEADER ==========-->
        <!--========== PROMO BLOCK ==========-->
        <div id="login" class="s-promo-block-v1">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <p class="g-text-center--xs text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                            <form submit="" style="background: #bd2026 !important;" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Admin Login</h2>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <select name="event" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Type">
                                        <option value="AdVenture_team">Adventure</option>
                                        <option value="Swadesh_team">Swades</option>
                                        <option value="renderico_team">Render Ico</option>
                                        <option value="Azure">Azure</option>
                                        <option value="Brainathon">Brainathon</option>
                                        <option value="Townhall">Townhall</option>
                                        <option value="Expo">Startup Expo</option>
                                    </select>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <select name="type" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Type">
                                        <option value="0">SagBan</option>
                                        <option value="1">Manager</option>
                                    </select>
                                </div>


                                <div class="g-margin-b-30--xs">
                                    <input type="password" name="pass" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">You Better</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== FOOTER ==========-->
        <?php include("includes/script.php"); ?>
    </body>
    <!-- End Body -->
    </html>