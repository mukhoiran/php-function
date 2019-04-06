<?php
  if(isset($_POST['submit'])){
    // var_dump($_FILES); --> get info abut image
    $time = time();
    $name = $_FILES['image']['name'];
    $src = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    $size = $_FILES['image']['size'];
    $ext = $_FILES['image']['type'];
    $filefolder = 'upload/'.$name;
    // show extension files
    // $ex = pathinfo($name, PATHINFO_EXTENSION);

    if($error == 0){
      // size in Byte (1MB = 1.000.000 Byte)
      if($size < 1000000){

        if($ext == 'image/png' || $ext == 'image/jpg'){

          // avoid upload same name
          if(file_exists($filefolder)){
            $filefolder = str_replace(".png","",$filefolder);
            $filefolder = $filefolder."_".$time.".png";
          }

          //upload image
          move_uploaded_file($src, $filefolder);
          echo "Upload successfull";
        }else{
          echo "Extension file shoud be jpg/png";
        }
      }else{
        echo "Image size is too big";
      }
    }else{
      echo "Error happen";
    }
  }
?>

<!-- enctype use for upload file form -->
<form class="" action="index.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image" value="">
  <input type="submit" name="submit" value="upload">
</form>
