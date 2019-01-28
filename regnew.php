<?php
  session_start();
  if(isset($_POST['regnew'])){
    $db_host = "localhost:3306";
    $db_username = "conso";
    $db_pass = "Conso@123";
    $db_name = "conso19";

    $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
    mysqli_select_db($con,$db_name) or die ("no database");

    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $contact = $con->real_escape_string($_POST['contact']);
    $password = $con->real_escape_string($_POST['password']);
    $cpassword = $con->real_escape_string($_POST['cpassword']);

    if($password == $cpassword){
      $hashed_password = $con->real_escape_string(password_hash($npassword, PASSWORD_DEFAULT));

      $query = "SELECT * from Registrations where Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);

      if($num!=0){
        echo "The email you entered is already registered.";
      }else{
        $otp = '1234567890';
        $otp = str_shuffle($otp);
        $otp = substr($otp, 0, 6);

        $q = "INSERT INTO Registrations(Name,Email,Contact,Password) VALUES('$name','$email','$contact','$password')";
        if(mysqli_query($con,$q)){
          echo "You are registered with us. Now you can register in various events of Consortium <a href='register.php'>here</a>";
        }else {
          echo "Some error occurred. Email us at contact@ecellvnit.org";
        }

        // ab yahan pe email bhejna hai for email confirmation
      }
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action='regnew.php' method='post'>
      <input type='text' name='name' value='' placeholder='*Your Name'>
      <input type='email' name='email' value='' placeholder='*Your Email'>
      <input type='tel' name='contact' value='' placeholder='Your Contact'>
      <input type='password' name='password' value='' placeholder='Choose a Password'>
      <input type='password' name='cpassword' value='' placeholder='Confirm your password'>
      <input type='submit' name='regnew' value='Register'>
    </form>
  </body>
</html>
