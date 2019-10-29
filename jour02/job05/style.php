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
		$px=random_int(20, 60);
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
	text-shadow: 3px 3px 2px rgba(24, 25, 26, 0.46);
	font-size:<?php echo taille(); ?>px;
	padding-left:<?php echo taille(); ?>%;
	height: 100vh;
}
div{
	color:<?php echo couleur();?>;
	text-shadow: 3px 3px 2px rgba(24, 25, 26, 0.46);
	font-size:<?php echo taille(); ?>px;
	padding:1%;
	text-align:center;
}