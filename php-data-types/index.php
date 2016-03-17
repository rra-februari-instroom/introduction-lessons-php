<!DOCTYPE html>
<html>
	<head>
		<title>Mijn eerste html</title>
	</head>
	<body>
		<?php
		
		//String
		$dag = "maandag";
		
		//Integer (positeve of negatieve gehele getallen)
		$getal = 231;
		
		//Float (kommagetallen)
		$getal2 = 156.5;
		
		// Boolean
		$mooi_weer = true;
		$isIngelogd =  false;
		$winnaarLotto = false;
		
		
		// Indexed array's
		$automerk = array("Mercedes", "Fiat", "Audi", "BMW", 9.6, "Hyundai");
		
		var_dump($automerk);
		
		echo "Dit zijn auto's in het array: ".$automerk[1];
		
		
		echo "<hr>";
		
		$fruit = array("appel",
					   "sinaasappel",
					   "kiwi",
					   "meloen",
					   "ananas");
					   
		var_dump($fruit);
					   
		echo "Ik vind ".$fruit[2]." erg lekker";
		
		echo "<hr>";
		// Dit is een associatief array
		$persoonsgegevens = array("voornaam" => "Arjan",
								  "tussenvoegsel" => "de",
								  "achternaam" =>"Ruijter",
								  "geboortedatum" => "30-08-1968",
								  "woonplaats" => "Castricum",
								  "postcode" => "1901 CB");
								  
		var_dump($persoonsgegevens);
		
		echo "Mijn naam is: ".$persoonsgegevens["voornaam"]." ".
							  $persoonsgegevens["tussenvoegsel"]." ".
							  $persoonsgegevens["achternaam"]."<br>";
		echo "Ik woon in: ".$persoonsgegevens["woonplaats"].", mijn postcode is: ".$persoonsgegevens["postcode"]."<br>";
		echo "Mijn geboortejaar is: ".$persoonsgegevens["geboortedatum"];
							  
							  
		echo "<hr><br><br>";
		
		echo "Mijn username op github is: rra-februari-instroom";
		
		$hierZitNietsIn = NULL;
		
		echo "Wat zit hier in: ".$hierZitNietsIn;
							  
					   
		
		
		
		
		
		
		
		?>
	</body>
</html>