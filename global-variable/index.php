<?php
//------------------------------
//--------GET and POST----------
//------------------------------

// if(isset($_GET['submit'])){
//   echo $_GET['name'];
// }

// if(isset($_POST['submit'])){
//   echo $_POST['name'];
// }

//global variable
// echo $_SERVER['SERVER_NAME'];
// die();

//for use session
session_start();

$user = 'anam';
$password = '123';

if(isset($_POST['submit'])){
  if($_POST['name'] == $user && $_POST['password'] == $password){
    // echo "Login success";

    //cookie(key,value,expire)
    setcookie('user_name', $_POST['name'], time()+120*60);

    //delete cookie
    // setcookie('user_name', $_POST['name'], time()-120*60);

    //session
    $_SESSION['user_name'] = $_POST['name'];

    //redirect
    header('Location: profile.php');
    // header('Location: profile.php?name='.$user);
  }else{
    echo "Login failed";
  }
}

?>

<form class="" action="index.php" method="post">
    <input type="text" name="name" value="">
    <input type="password" name="password" value="">
    <input type="submit" name="submit" value="Submit">
</form>
