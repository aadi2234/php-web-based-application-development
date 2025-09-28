<?php
	$day=date("M");
	switch($day)
	{
		case 'Jan':
				echo "January";
		break;
		
		case 'Feb':
				echo "February";
		break;
		
		case 'Mar':
				echo "March";
		break;
		
		case 'Apr':
				echo "April";
		break;
		
		case 'May':
				echo "May";
		break;
		
		case 'Jun':
				echo "June";
		break;
		
		case 'Jul':
				echo "July";
		break;
		
		case 'Aug':
				echo "August";
		break;
		
		case 'Sep':
				echo "September";
		break;
		
		case 'Oct':
				echo "October";
		break;
		
		case 'Nov':
				echo "November";
		break;
		
		case 'Dec':
				echo "December";
		break;
		
		default:
				echo "Invalid Month";
	}
?>