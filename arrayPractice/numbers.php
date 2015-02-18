<?php
	$numberArray = array(23, 24, 6, 9, 2, 4, 8, 12, 18);
	$solution = 1;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Number Array Math</title>
	</head>
	<body>
		<h1>Number Play</h1>
		<?php 
	foreach ($numberArray as $nextNumber){
		$solution = $solution * $nextNumber;
			echo "<h3>" . "The number is: " . $nextNumber . ", " . " for a total of " . $solution . "</h3>"; 	
			}
		?>
	</body>
</html>