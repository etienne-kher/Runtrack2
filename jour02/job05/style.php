<?php
	header('content-type: text/css');

	function couleur()
	{
		$r=random_int(0, 255);
		$g=random_int(0, 255);
		$b=random_int(0, 255);

		$rgb="rgb(".$r.",".$g.",".$b.")";
		return $rgb;
	}

	function taille()
	{
		$px=random_int(10, 50);
		return $px;
	}


	function deg()
	{
		$deg=random_int(0, 360);
		return $deg;
	}


?>

body{
	background: linear-gradient(<?php echo deg();?>deg, <?php echo couleur();?>, <?php echo couleur();?>, <?php echo couleur();?>);
	background-attachment: fixed;
	color:<?php echo couleur();?>;
	font-size:<?php echo taille(); ?>px;
	padding-left:<?php echo taille(); ?>%;
	height: 100vh;
}