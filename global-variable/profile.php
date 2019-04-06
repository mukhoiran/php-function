<?php
  session_start();
  // echo "This is profile for user ".$_GET['name']."";
  // echo "This is profile for user ".$_COOKIE['user_name']."";
  if (isset($_SESSION['user_name'])){
    echo "This is profile for user ".$_SESSION['user_name']."";
  }else{
    echo "Please login first";
  }

?>

<a href="logout.php">Logout</a>
