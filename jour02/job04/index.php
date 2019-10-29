<?php

	$nb=0;
	while ($nb<=100) {
/*
		if (($nb%3)==0) {	
			echo "Fizz<br>";
		}
	 	else if(($nb%5)==0)
	 	{
	 		echo "Buzz<br>";
	 	}
	 	else if((($nb%3)==0)&&((($nb%3)==0)))
	 	{
	 		echo "FizzBuzz";
	 	}
	 	else{
	 		echo "$nb<br>";
	 	}
		$nb++;
		*/

		if (($nb%3)==0||($nb%5)==0)
		 {
			if (($nb%3)==0 && ($nb%5)==0) 
			{
				echo "FizzBuzz<br>";
			}
			else 
				{
				 if(($nb%3)==0 && ($nb%5)!=0) 
					{
						echo "Fizz<br>";
					}
					if (($nb%3)!=0 && ($nb%5)==0) 
					{
						echo "Buzz<br>";
					}
				}
			}		
		else{
	 		echo "$nb<br>";
	 	}

	 	$nb++;

	 } 
?>