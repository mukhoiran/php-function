<?php include('header.php'); ?>

<!-- # include vs require
  - include is not a MUST, but require is a MUST.
  - include show error and continue read
  - require show errot and stop read

# include_once vs require_once
  - If already include / require not do again
  - Avoid duplicate include / require -->

    <main>
      Welcome to the PHP, one of programming language.
    </main>

    <hr>
    <h2>Implode and Explode</h2>

    <?php

      //implode(separator,array) -> convert array to string
      $jobs = ["programmer","designer","manager"];
      echo implode(" ",$jobs);

      echo "<br>";

      //explode(separator,string) -> convert string to array
      $study = "html css javascript php";
      print_r(explode(" ",$study));
      // print_r(explode(" ",$study, 2)); --> limit array
    ?>

    <hr>
    <h2>Date Function</h2>

    <?php
      echo date('Y-m-d h:i:s');
     ?>

     <hr>
     <h2>Trim and Strip Tags</h2>
     <?php
       //trim : remove space before and after
        $text = " this is input user ";
        echo "before".$text."here";
        echo "<br>";
        echo "after".trim($text)."here";
        echo "<br><br>";

        //strip_tags : remove tag on input
        $text2 = "<script>alert('Hallo everyone')</script>";
        $text3 = "<b>Hallo everyone</b>";
        echo strip_tags($text2);
        // echo strip_tags($text2, '<b>'); --> allow tag <b>

     ?>

<?php include('footer.php'); ?>
