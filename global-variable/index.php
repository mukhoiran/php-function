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


$user = 'anam';
$password = '123';

if(isset($_POST['submit'])){
  if($_POST['name'] == $user && $_POST['password'] == $password){
    // echo "Login success";

    //redirect
    header('Location: profile.php?name='.$user);
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
