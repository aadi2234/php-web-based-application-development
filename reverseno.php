<?php
	$no=654;
	$rev=0;
	while(($no>0))
	{
		$digit=$no%10;
		$rev=$rev*10+$digit;
		$no=(int)($no/10);
	}
	echo "Reverse of the $no = $rev";
?>