<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>States Array</title>
	<meta name="description" content="This is a PHP assignment for Coding Dojo">
	<style type="text/css">
	select {
		display: block;
		margin: 2%;
	}
	</style>
</head>
<body>

<?php
function statesFor($arr){
	for($i = 0; $i < count($arr); $i++){
		echo "<option>".$arr[$i]."</option>";
	}
}
function statesForeach($arr){
	foreach ($arr as $value) {
		echo "<option>".$value."</option>";
	}
}
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
 ?>

<select>
	<?php statesFor($states); ?>
</select>

<select>
	<?php statesForeach($states); ?>
</select>

<select>
	<?php
	array_push($states, 'NJ', 'NY', 'DE');
	statesForeach($states);
	?>
</select>

</body>
</html>
