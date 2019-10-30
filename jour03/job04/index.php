<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.php">
	<title>job 4</title>
</head>
<body>
	<?php 
	
	$str="Dans l'espace, personne ne vous entend crier";
	$i=0;
	do{
		$i++;
		$is=isset($str[$i]);
		}
		while($is==true);
		echo "il y a $i caractères ";

	 ?>
	
</body>
</html>
