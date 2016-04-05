<?php
function passUser($arr){
	echo "There are ".count($arr)." keys in this array: ";
	foreach ($arr as $key => $value) {
		echo "$key, ";
	}
	echo "<br>";
	foreach ($arr as $key => $value) {
		echo "The value in the key '{$key}' is '{$value}'.<br>";
	}
}
$users['first_name'] = "Michael";
$users['last_name'] = "Choi";
passUser($users);
 ?>
