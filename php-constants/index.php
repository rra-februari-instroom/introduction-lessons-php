<!DOCTYPE html>

<html>
<head>
	<title>Constanten</title>
</head>
	<body>
	<h3>Gebruik maken van constanten en deze defini&euml;ren</h3>
	<?php
		$dollar = 1.14426;
		define("US_DOLLAR", 2.14427);
		$anderGetal = 6.78;
		//US_DOLLAR = 10.0; kan niet!!
		$product = $anderGetal * US_DOLLAR;
		
		https://dev.w3.org/html5/html-author/charref
	?>
	
	<p>Vandaag heb ik geld gewisseld. Ik verruilde mijn euro's om in dollars (koers: 1 euro = <?php echo US_DOLLAR; ?> U.S. dollars</p>
	<p>Vandaag heb ik geld gewisseld. Ik verruilde mijn euro's om in dollars (koers: 1 euro = <?php echo US_DOLLAR; ?> U.S. dollars</p>
	<p>Vandaag heb ik geld gewisseld. Ik verruilde mijn euro's om in dollars (koers: 1 euro = <?php echo US_DOLLAR; ?> U.S. dollars</p>
	<p>Vandaag heb ik geld gewisseld. Ik verruilde mijn euro's om in dollars (koers: 1 euro = <?php echo US_DOLLAR; ?> U.S. dollars</p>
	<p>Vandaag heb ik geld gewisseld. Ik verruilde mijn euro's om in dollars (koers: 1 euro = <?php echo US_DOLLAR; ?> U.S. dollars</p>
	<p>Vandaag heb ik geld gewisseld. Ik verruilde mijn euro's om in dollars (koers: 1 euro = <?php echo US_DOLLAR; ?> U.S. dollars</p>
	<p>Vijf maal de koers van de dollar is: <?php echo $product; ?></p>
	
	</body>
</html>