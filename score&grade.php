<?php
function grades(){
	for ($i=0; $i < 100 ; $i++) {
	 	$num = rand(50,100);
 		echo "<div class='grade'>";
	 	if ($num >= 90) {
		 	echo "<h1>Your Score: ".$num."/100</h1><h2 class='a'>Your grade is A.</h2><br>";
		}
		 elseif ($num >= 80 && $num < 90) {
		 	echo "<h1>Your Score: ".$num."/100</h1><h2 class='b'>Your grade is B.</h2><br>";
		}
		 elseif ($num >= 70 && $num < 80) {
		 	echo "<h1>Your Score: ".$num."/100</h1><h2 class='c'>Your grade is C.</h2><br>";
		}
		 else {
		 	echo "<h1>Your Score: ".$num."/100</h1><h2 class='d'>Your grade is D.</h2><br>";
		}
		echo "</div>";
	}
 }
grades();
?>
