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
	function police()
	{	$ligne;
		$p=random_int(0, 3);
		switch ($p) {
    case 0:
        $ligne="'Titan One', cursive;";
        break;
    case 1:
      	$ligne="'Magra', sans-serif;";
        break;
    case 2:
        $ligne="'Fugaz One', cursive;";
        break;
    case 3:
        $ligne="'Germania One', cursive;";
        break;
		}
		return $ligne;
	}
?>
@import url('https://fonts.googleapis.com/css?family=Fugaz+One|Germania+One|Magra|Titan+One&display=swap');

h1{
	text-align:center;
	background-color:<?php echo couleur();?>;
	color:<?php echo couleur();?>;
	font-family: <?php echo police(); ?>
}
body{
	background-color:<?php echo couleur();?>;
	margin:0;
}