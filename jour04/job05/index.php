<!DOCTYPE html>
<html>
<head>
	<title>job 5</title>
</head>
<body>
<form method="post" action="index.php">
	<label for="name"></label>
	<input type="text" id="name" name="username">
	<label for="motdepasse"></label>
	<input type="password" id="motdepasse" name="password">
	<input type="submit" value="envoyer">	
	
	<?php
	if($_POST==true)
	{
		if($_POST["username"]=="John"&&$_POST["password"]=="Rambo")
		{
			echo "C’est pas ma guerre";
		}
		else
		{
			echo "Votre pire cauchemar";
		}
	}
	?>
</form>
</body>
</html>