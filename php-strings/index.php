<?php
/****************************************
 * Dit stukje code gaat over strings.
 *	
 ****************************************/
 
 $zin1 = "ICT Academie MBO Utrecht";
 $zin2 = "Ik eet ieder morgen havermout met soyamelk en frambozen";
 
 zinInfo($zin1);
 zinInfo($zin2);
 
 
 function zinInfo($zin)
 {
	 echo "De zin is: ".strtoupper($zin)."<br><hr>";
	 
	 echo "De zin heeft ".strlen($zin)." ascii tekens<br><hr>";
	 
	 echo "Het aantal spaties in de zin '".$zin."' is: ".substr_count($zin, " ")."<br><hr>";
	 
	 echo "Het totaal aantal letters in de zin is: ".(strlen($zin) - substr_count($zin, " "))."<br><hr>";
 }
?>