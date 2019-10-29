<?php


	$nb=0;
	while ($nb<=100) {
		if ($nb<=20) {	
			echo "<i>$nb</i><br>";
		}
		else if($nb>=25&&$nb<=50)
		{	if($nb==42){
	 			echo "LaPlateforme_<br>";
	 		}
	 		else{
	 		echo "<u>$nb</u><br>";
	 		}
	 	}
	 	else{
	 		echo $nb.'<br>';
	 	}
		$nb++;
	 } 
?>