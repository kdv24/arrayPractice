<?php
	$writers = array("Picoult", "Grisham", "Wiesel", "Silverstein");
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Some authors</title>
	</head>
	<body>
		<?php
		foreach ($writers as $writer){
			echo "<h3>" . $writer . " becomes " . strrev($writer) . "</h3>";
		}
		?>
	</body>
</html>