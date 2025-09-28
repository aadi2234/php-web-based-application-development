<?php
	$var;
	echo "Array Methods<br>";
	$arr=array(45,20,78,64,03);
	echo "<br>Original Array=";
	foreach($arr as $srtd)
	{
		echo "$srtd,";
	}
	sort($arr);
	echo "<br>sort() : After Sorting=";
	foreach($arr as $srtd)
	{
		echo "$srtd,";
	}
	echo "<br>reverse() : After Reversing=";
	$reversed=array_reverse($arr);
	foreach($reversed as $rev)
	{
		echo "$rev,";
	}
	$arr[]=56;
	echo "<br>After Adding=";
	foreach($arr as $srtd)
	{
		echo "$srtd,";
	}
	$arr2=range('a','z');
	echo "<br>range() : New Array=";
	foreach($arr2 as $srtd)
	{
		echo "$srtd,";
	}
	$str="101,Rajesh,10030";
	$arr3=explode(',',$str);
	echo"<br>explode() :";
	foreach($arr3 as $exp)
	{
		echo "$exp,";
	}
	$str2=implode(',',$arr3);
	echo"<br>implode() :";
	foreach($arr3 as $imp)
	{
		echo "$imp,";
	}
	$std3=array("01"=>"Yash","02"=>"Nivrutti","03"=>"Sahil","04"=>"Prasad","05"=>"Vikas");
	echo"<br>flip() :";
	$arr4=array_flip($std3);
	foreach($arr4 as $sd => $val)
	{
		print_r("$sd - $val,");
	}
	$a="pink";
	$col=array("a"=>"red","b"=>"yellow","c"=>"black","d"=>"white");
	echo"<br>extract() :";
	extract($col,EXTR_PREFIX_SAME,"demo");
	echo "Value of a= $a";
	echo "<br>Value of a= $demo_a";
?>