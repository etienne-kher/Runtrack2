<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.php">
	<title>job 1</title>
</head>
<body>
	<?php 

	$tabnb= array( 200 ,204,173,98,171,404,459 );
	$i=0;
	while ($i <= 6) {
		if($tabnb[$i]%2==0){
			echo $tabnb[$i].' paire <br>';
			
		}
		else
		{
			echo $tabnb[$i].' impaire <br>';
			
		}
		$i++;
	}

	 ?>
</body>
</html>