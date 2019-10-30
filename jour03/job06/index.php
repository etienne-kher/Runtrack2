<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.php">
	<title>job 6</title>
</head>
<body>
	<?php 

	$str="Les choses que l'on possede finissent par nous posseder.";
	
	$taille=strlen($str);
	$i=$taille-1;
	while ($i >= 0) 
	{
		echo $str[$i];
		$i=$i-1;
	}

	 ?>
</body>
</html>
