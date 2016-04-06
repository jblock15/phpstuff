<?php
?>
<!DOCTYPE html>
<html>
<head>
 <title>Multiply by 5</title>
</head>
<body>
 <?php

 $A = array(2,4,10,16);
 function Multiply($array, $factor ){
   foreach ($array as $key => $value){
     $array[$key]=$value*$factor;
   }
   return $array;
}
$B = multiply($A, 5);
var_dump($B);

?>
</body>
</html>
