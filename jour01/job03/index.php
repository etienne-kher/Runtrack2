<?php
	$majeur=true;
	$age=23;
	$prenom="Etienne";
	$taille= 1.3 ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>test php</title>
</head>
<body>
	<table>
		<tr>
			<th>type</th>
			<th>nom</th>
			<th>valeur</th>
		</tr>
		<tr>
			<td>booléen</td>
			<td>majeur</td>
			<td><?php echo $majeur ;?></td>
		</tr>
		<tr>
			<td>entier</td>
			<td>age</td>
			<td><?php echo $age ;?></td>
		</tr>
		<tr>
			<td>chaîne de caractères</td>
			<td>prenom</td>
			<td><?php echo $prenom ;?></td>
		</tr>
		<tr>
			<td> nombre à virgule flottante</td>
			<td>taille</td>
			<td><?php echo $taille ;?></td>
		</tr>
	</table>
</body>
</html>
