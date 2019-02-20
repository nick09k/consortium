<?php 

function htmlMail($t, $sub, $name, $teamname, $event){


    $to = $t;

    $subject = $sub;
    $htmlSwadesh = '
    <!DOCTYPE html>
        <html>
            <head>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>

    <script>window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag("js", new Date());

          gtag("config", "UA-125403862-1");
      </script>
      <title>Email-Template</title>
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
                <h2 style="font-size:22px;">Welcome to Swades!</h2><br>

                <div class="context">
                    <h3><b>Hello '.$name.',</b></h3>


                    <p>Thank You for registering team <b>'.$teamname.'</b></p>
                    <div>
                        <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>Swades</b></p>
                        <p>
                            Here is your way to the first step towards the journey of bringing about social change. Get ready to ignite your entrepreneurial mindset to solve problems affecting over 70% of Indian residents.<br>
                            <br>
                        </p>
                        <br>

                          <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://goo.gl/forms/xXRcPeOWCat1gGtr1">Questionnaire</a>

                        <p>
                          <br>
                          <p>To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>For queries and in case of any difficulty, feel free to contact us.</p>
                          <br>

                          <br>
                            With warm regards,<br>
                            Anushree Rungta<br>
                            Core-Coordinator, Ecell VNIT
                        </p>
                    </div>
                </div>
            </body>
        </html>';



        $htmlRenderico = '
    <!DOCTYPE html>
        <html>
            <head>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>

    <script>window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag("js", new Date());

          gtag("config", "UA-125403862-1");
      </script>
      <title>Email-Template</title>
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
                <h2 style="font-size:22px;">Welcome to Render.ico!</h2><br>

                <div class="context">
                    <h3><b>Hello '.$name.',</b></h3>


                    <p>Thank You for registering team <b>'.$teamname.'</b></p>
                    <div>
                        <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>Render.ico</b></p>
                        <p>
                            Here is your way to the first step towards the journey of express yourself and know where you stand for within the strokes and shades of a company logo?<br>
                            <br>
                        </p>
                        <br>

                          <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://drive.google.com/open?id=1sAFvYDP4dwP4pt9BWmCtx5EDMno3WCfX">Problem Statement
                          </a>

                        <p>

                        <br>
                        <p>Note: The Logo to be submitted should be in the form of: .jpeg or .png or .psd or .ai .<br> For more information visit website.</p>


                          <br>
                          <p>To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>For queries and in case of any difficulty, feel free to contact us.</p>
                          <br>

                          <br>
                            With warm regards,<br>
                            Team Render.ico<br>
                            Consortium 19, Ecell VNIT
                        </p>
                    </div>
                </div>
            </body>
        </html>';

        $htmlBrainathon = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to Brainathon</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p>Thank You for showing interest in the Brainathon!</p>
                          <div>
                              <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for this event.
                              </p>
                              <p>
                                  To complete your registration for brainathon follow the button below and become a part of Central India’s Biggest Entrepreneurship Summit Consortium 19 <br>
                                  <br>
                              </p>


                              <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://consortium.ecellvnit.org/payexpo.php">Pay Now!</a>

                              
                              <p>
                                  To keep you updated, all the relevant details will be emailed to you very shortly.<br>
                                  <br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Anushree Rungta<br>
                                  Core-Coordinator, E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';


    $htmlAzure = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to Azure Space</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p>Thank You for showing interest in the Azure Space!</p>
                          <div>
                              <p>We are well pleased to have you on board for this event.
                              </p>
                              <p>
                                  To complete your registration for Azure Space follow the button below and become a part of Central India’s Biggest Entrepreneurship Summit Consortium 19 <br>
                                  <br>
                              </p>

                              <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://consortium.ecellvnit.org/payazure.php">Pay Now!</a>

                              
                              <p>
                                  To keep you updated, all the relevant details will be emailed to you very shortly.<br>
                                  <br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Anushree Rungta<br>
                                  Core-Coordinator, E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';          
    $htmlAzureSuccess = '<!DOCTYPE html>
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
                      <h2 style="font-size:22px;">Welcome to Azure Space</h2><br>

                      <div class="context">
                          <h3><b>Hello</b></h3>


                          <p>Congratulations! You are now a part of Central India’s Biggest Entrepreneurship Summit.</p>
                          <div>
                              <p>
                                  We are well pleased to have you on board for this event.You are successfully registered for Azure Space. Kindly bring your college Id at time of workshop for verification. <br>
                                  
                              </p>
                              
                              <p>
                                  To keep you updated, all the relevant details will be emailed to you very shortly.
                                  <br>
                              </p>
                              <p>For queries and in case of any difficulty, feel free to contact us.</p>
                              <p>
                                  With warm regards,<br>
                                  Anushree Rungta<br>
                                  Core-Coordinator, E-Cell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';

    $html = "";
    if($event == 'Swadesh'){
      $html = $htmlSwadesh;
    }

    else if($event == 'renderico'){
      $html = $htmlRenderico;
    }
    else if($event == 'Brainathon'){
      $html = $htmlBrainathon;
    }
    else if($event == 'Azure'){
      $html = $htmlAzure;
    }
    else if($event == 'Azurevnit'){
      $html = $htmlAzureSuccess;
    }
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
    if ($result === FALSE) {
        $msg = 'We are facing problem in sending email. Please use this link to pay your registration fees.';
    }

  }
?>