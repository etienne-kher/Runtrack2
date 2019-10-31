<!DOCTYPE html>
<html>
<head>
	<title>job 6</title>
</head>
<body>
<form method="get" action="index.php">
	<label for="nb">nombre ?</label>
	<input type="number" id="nb" name="nombre">
	<input type="submit" value="envoyer">	
	

	<?php
		if($_GET==true)
		{
			if($_GET["nombre"]%2==0)
			{
				echo $_GET["nombre"]." est nombre paire";
			}
			else
			{
				echo $_GET["nombre"]." est nombre impaire";
			}
		}

	?>
</form>
</body>
</html>