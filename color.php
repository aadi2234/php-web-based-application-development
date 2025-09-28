<?php
	$col="red";
	switch(strtolower($col))
	{
		case "green":
				echo "Green";
		break;
		
		case "yellow":
				echo "Yellow";
		break;
		
		case "red":
				echo "Red";
		break;
		
		case "black":
				echo "Black";
		break;
		
		default:
				echo "Invalid Color";
	}
?>