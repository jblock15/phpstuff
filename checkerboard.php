<!DOCTYPE html>
<html>
  <head>
    <title>checkerboard</title>
    <link rel="stylesheet" type="text/css" href="checkerboardcss.css">

  </head>
  <body>
<?php
    for($i=0; $i < 64 ; $i++) {
      if($i % 2 === 0){
        echo "<div class='black'></div>";
    }
      if($i % 2 === 1){
        echo "<div class='red'></div>";
    }
  }
    for($i=0; $i < 8 ; $i++) {
      if($i % 2 === 0){
        echo "<div class='black'></div>";
    }
      if($i % 2 === 1){
        echo "<div class='red'></div>";
    }
  }

?>

  </body>
</html>
