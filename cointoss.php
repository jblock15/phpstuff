<!DOCTYPE html>
<html>
<head>
  <title>Coin Toss</title>

</head>
<body>

<?php
function coinFlip(){
	$num = rand(1,2);
	$head = 0;
	$tail = 0;
	$toss = 0;
	echo "<h2>Get ready to roll!</h2>";
	for($i = 0; $i < 1000; $i++){
		$num = rand(1,2);
		if($num == 1){
			$head++;
			$toss++;
			echo "<div>";
			echo "<p>Attempt #".$toss.": Throwing a coin...";
			echo " It's HEADS!...";
			echo "got ".$head." head(s) and ".$tail." tail(s) so far.</p></div>";
		}
		else{
			$tail++;
			$toss++;
			echo "<div>";
			echo "<p>Attempt #".$toss.": Throwing a coin...";
			echo " It's TAILS!...";
			echo "got ".$head." head(s) and ".$tail." tail(s) so far.</p></div>";
		}
	}
	echo "<h2>The Program is now complete... Thank you for Playing.</h2>";
}
?>

<?php coinFlip(); ?>

</body>
</html>
