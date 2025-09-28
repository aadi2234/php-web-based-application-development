<?php
	echo "Print first 30 Even Numbers<br>";
	echo "Using For Loop:-";
	for($i=1;$i<=60;$i++)
	{
		if($i%2==0)
		{
			echo "$i ";
		}
	}
	echo "<br>";
	
	echo "<br>";
	echo "Using While Loop:-";
	$i=1;
	while(($i<=60))
	{
		if($i%2==0)
		{
			echo "$i ";
		}
		$i+=1;
	}
	echo "<br>";
	
	echo "<br>";
	echo "Using Do-While Loop:-";
	$i=1;
	do
	{
		if($i%2==0)
		{
			echo "$i ";
		}
		$i+=1;
	}while(($i<=60))
?>