<?php
	$no=10;$a=0;$b=1;
	for($i=1;$i<=$no;$i++)
	{
		echo "$a ";
		$next=$a+$b;
		$a=$b;
		$b=$next;
	}
?>