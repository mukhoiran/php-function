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

    <h2>Implode and Explode</h2>

    <?php

      //implode(separator,array) -> convert array to string
      $jobs = ["programmer","designer","manager"];
      echo implode(" ",$jobs);

      echo "<hr>";

      //explode(separator,string) -> convert string to array
      $study = "html css javascript php";
      print_r(explode(" ",$study));
      // print_r(explode(" ",$study, 2)); --> limit array
    ?>

<?php include('footer.php'); ?>
