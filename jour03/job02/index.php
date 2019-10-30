<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.php">
	<title>job 2</title>
</head>
<body>
	<?php 

	$str= "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
	$i=0;
	$taille=strlen($str);

	while ($i <= $taille) {
		
		if($i%2==0)
		{
			echo $str[$i];
			
		}
		$i++;
	}

	 ?>
</body>
</html>
