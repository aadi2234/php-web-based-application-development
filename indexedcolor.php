<?php
	//Indexed Array
	echo "Indexed Array<br>";
	$color=array("red","green","yellow","black","white");
	echo "Color List=";
	foreach($color as $col)
	{
		echo "$col,";
	}
	//Associative Array
	echo "<br><br>Associative Array<br>";
	$std=array("01"=>"Yash","02"=>"Nivrutti","03"=>"Sahil","04"=>"Prasad","05"=>"Vikas");
	echo "Student List=";
	foreach($std as $sd => $val)
	{
		print_r("$sd - $val,");
	}
	//Multidimentional Array
	echo "<br><br>Multidimentional Array<br>";
	$std=array(
				array(01,"Yash",89.23),
				array(02,"Nivrutti",99.23),
				array(03,"Sahil",97.03),
				array(04,"Prasad",96.08),
				array(05,"Vikas",87.39),
			  );
	echo "Roll No:".$std[0][0]."\t\tStudent Name:".$std[0][1]."\t\tPercentage=".$std[0][2]."<br>";
	echo "Roll No:".$std[1][0]."\t\tStudent Name:".$std[1][1]."\t\tPercentage=".$std[1][2]."<br>";
	echo "Roll No:".$std[2][0]."\t\tStudent Name:".$std[2][1]."\t\tPercentage=".$std[2][2]."<br>";
	
?>