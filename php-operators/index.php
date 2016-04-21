<?php
	$getal1 = 5.6;
	$getal2 = 2;
	
	// De + operator (som)
	$som = $getal1 + $getal2;
	$somString = "De som van ".$getal1." + ".$getal2." = ".$som;
	
	// De - operator (verschil)
	$verschil = $getal1 - $getal2;
	$verschilString = "Het verschil van ".$getal1." - ".$getal2." = ".$verschil;
	
	// De * operator (product)
	$product = $getal1 * $getal2;
	$productString = "Het product van ".$getal1." * ".$getal2." = ".$product;
	
	
	// De / operator (quotient)
	$quotient = round($getal1 / $getal2, 3);
	
	$quotientString = "Het quotient van ".$getal1." / ".$getal2." = ".$quotient;
	
	
	// De % operator (modulus)
	$modulus = $getal1 % $getal2;
	$modulusString = "De modulus van ".$getal1." % ".$getal2." = ".$modulus;	
?>

<h3>Werken met operators</h3>
<p><?php echo $somString; ?></p>
<p><?php echo $verschilString; ?></p>
<p><?php echo $productString; ?></>
<p><?php echo $quotientString; ?></p>
<p><?php echo $modulusString; ?></p>



