
<?php



      $oddnums = array();
   for($i = 0; $i < 20001; $i++) {
        if($i % 2  !== 0) {
          array_push($oddnums, $i);
        }
      }

    var_dump($oddnums);
?>
