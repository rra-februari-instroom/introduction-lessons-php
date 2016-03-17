<h3>Optellen van getallen</h3>
<?php
	//var_dump($_POST);
	$uitkomst = $_POST["getal1"] + $_POST["getal2"];
	echo "De som van: ".$_POST["getal1"]." en ".$_POST["getal2"]." is: ".$uitkomst;
?>