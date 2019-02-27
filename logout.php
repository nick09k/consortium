<?php
  session_start();
  session_destroy();

  if($_GET['q'] == 'db'){
  	header('location:logindb.php');
  }
  else{
  	header('location:login.php');
  }
  
 ?>
