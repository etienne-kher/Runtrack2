<!DOCTYPE html>
<html>
<head>
	<title>job 4</title>
</head>
<body>

	<?php
		function calcule($a,$operation,$b)
		{
			switch ($operation) {
				case '+':
					$resultat=$a + $b;
					break;
				case '-':
					$resultat=$a - $b;
					break;
				case '*':
					$resultat=$a * $b;
					break;
				case '/':
					$resultat=$a / $b;
					break;
				case '%':
					$resultat=$a % $b;
					break;

			}

			return $resultat;
		}
		echo "2+8=".calcule(2,'+',8)."<br>";
		echo "2-9=".calcule(2,'-',9)."<br>";
		echo "2*5=".calcule(2,'*',5)."<br>";
		echo "2/4=".calcule(2,'/',4)."<br>";
		echo "2%2=".calcule(2,'%',2)."<br>";
	?>

</body>
</html>