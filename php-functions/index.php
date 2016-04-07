<!DOCTYPE html>
<html>
	<head>
		<title>PHP- Functions</title>
	</head>
	<body>
		<?php
			include("./functions.php");
			$voornaam = array("Arjan", "Bert", "Harry");		
			showFirstname($voornaam[0], 34);
			showFirstname($voornaam[1], 23);
			showFirstname($voornaam[2], 12);
			showFirstname();
		?>
	</body>
</html>