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

<?php include('footer.php'); ?>
