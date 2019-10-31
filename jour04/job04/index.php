<!DOCTYPE html>
<html>
<head>
	<title>job 4</title>
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
	
	<table>
	<tr><th>argument</th></th><th>valeur</th></tr>
	<?php

	$c=0;
	foreach ($_POST as $key => $value) 
	{
		if($value!="")
		{
			echo "<tr><td>$key</td><td>$value</td></tr>";
		}
	}

	?>
		
	</table>
</form>
</body>
</html>