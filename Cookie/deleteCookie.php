<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Feltrinelli Login Popup</title>
    <link rel="stylesheet" href="styleUsaCookie.css">
  </head>

  <body>
  </body>
</html>

<?php
  /* setcookie("totale_speso"); */
  setcookie("totale_speso", "", time()-9999);
  echo "<div class='contenitoreForm'>", 'Cookie Eliminato!', "</div>";
?>
