<?php
  if(isset($_POST['submit'])){
    // var_dump($_FILES); --> get info abut image
    $name = $_FILES['image']['name'];
    $src = $_FILES['image']['tmp_name'];

    //upload image
    move_uploaded_file($src, 'upload/'.$name);
  }
?>

<!-- enctype use for upload file form -->
<form class="" action="index.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image" value="">
  <input type="submit" name="submit" value="upload">
</form>
