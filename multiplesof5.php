<!DOCTYPE html>
<html>
  <head>
    <title>multiples of 5</title>
  </head>
  <body>

    <?php
    function multiplesof5 () {
      for($i = 5; $i < 1000000; $i +=5){
        echo $i;
      }

    }
    multiplesof5();

     ?>

  </body>
</html>
