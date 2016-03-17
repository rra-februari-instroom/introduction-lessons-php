<!DOCTYPE html>
<html>
	<head>
		<title>Mijn eerste html</title>
	</head>
	<body>
		<?php
			// Hier wordt in een variabele een woord(string) opgeslagen
			$firstname = 'Arjan';
			$infix = " de ";
			$lastname = "Ruijter";
			
			//echo "Mijn naam is: ".$firstname." ".$infix." ".$lastname;
			echo "Mijn naam is: $firstname $infix $lastname<br><hr>";
			
			// We kunnen ook getallen opslaan in een variabele
			$number1 = 2023;
			$number2 = 134;
			$number3 = $number1 + $number2;
			
			//De som van 231 en 34 is 265
			echo "De som van ".$number1." en ".$number2." is: ".$number3."<br><hr>";
			
			/* Dit is code van Arjan de Ruijter
			 * sdfs
			 * 
			 */
			 
			# sdflkjslkjfd
		?>
		<form action="berekening.php" method="post">
			getal 1: <input type="text" name="getal1"><br>
			getal 2: <input type="text" name="getal2"><br>
			<input type="submit"  value="Bereken!">
		</form>
	</body>
</html>