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
        <div id="login" class="s-promo-block-v1 g-bg-color--primary-ltr">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <p class="g-text-center--xs text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                            <form submit="" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Admin Login</h2>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <select type="email" name="type" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Type">
                                        <option value="0">Team</option>
                                        <option value="1">Member</option>
                                        <option value="2">Reference</option>
                                        <option value="3">Questionnaire</option>
                                    </select>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <input type="email" name="email" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Email">
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <input type="password" name="pass" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
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