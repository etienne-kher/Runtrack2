<!DOCTYPE html>
<html>
<head>
	<title>job 2</title>
</head>
<body>

	<?php
		function bonjour($bol)
		{
			if($bol==true)
			{
				echo "Bonjour!<br>";
			}
		else{
				echo "Bonsoir!<br>";
			}
		}
		$booleen=true;
		bonjour($booleen);
		$booleen=false;
		bonjour($booleen);
	?>

</body>
</html>