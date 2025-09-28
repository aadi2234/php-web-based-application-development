<?php
	$no1=12;
	$no2=10;
	echo "call by value-<br>";
	echo "no1=".$no1."<br>no2=".$no2;
	function addition($no1,$no2)
	{
		$sum=$no1+$no2;
		return $sum;
	}
	echo "<br>Addition=" . addition($no1,$no2);
	echo "<br><br>call by reference-<br>";
	echo "no1=".$no1."<br>no2=".$no2;
	function addition1(&$no1,&$no2)
	{
		$sum=$no1+$no2;
		return $sum;
	}
	echo "<br>Addition=" . addition1($no1,$no2);
?>