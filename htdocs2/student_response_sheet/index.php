<?php

?>

<html>
  <head>
    <title>Student Response Sheet</title>
  </head>

  <body>
    <h3>Dear student, kindly fill your answer in the box provided against every question number.</h3>
    <form action = "studentResponseSubmission.php" method = "POST">
      <textarea name = "studentResponse1"></textarea>

      <input type = "submit" value = "Submit">
    </form>
  </body>
</html>
