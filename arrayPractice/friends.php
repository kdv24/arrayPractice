<?php
	$friends = array("Kirsten", "Ann", "Shannon", "Kerri");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>My friends</title>
	</head>
	<body>
		<h1>My friends</h1>
		<?php 
		foreach ($friends as $friend) {
			echo "<h4>" . $friend . " is my friend." . "</h4>";
		}
		?>
	</body>
</html>
