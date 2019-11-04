<!DOCTYPE html>
<html>
<head>
	<title>job 5</title>
</head>
<body>

	<?php
		function occurrences($str,$char)
		{
			$taille= strlen($str) ;
			$i=0;
			$nboc=0;
			while($i<$taille)
			{
				if($str[$i]==$char)
				{
					$nboc++;
				}

				$i++;
			}

			return $nboc;
		}
		
		echo "il y a ".occurrences("hello world","o")." occurrences de o dans : hello world";
	?>

</body>
</html>