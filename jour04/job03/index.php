<!DOCTYPE html>
<html>
<head>
	<title>job 3</title>
</head>
<body>
<form method="post" action="index.php">
	<label for="nom"></label>
	<input type="text" id="nom" name="nom">
	<label for="mail"></label>
	<input type="email" id="mail" name="mail">
	<label for="age"></label>
	<input type="number" id="age" name="age">
	<input type="submit" value="envoyer">	
	<?php

	$c=0;
	foreach ($_POST as $key => $value) 
	{
		if($value==true)
		{
			$c++;
		}
	}

	echo"il y a $c valeur ";
	?>
</form>
</body>
</html>