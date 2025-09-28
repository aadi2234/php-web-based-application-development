 <?php
	function strFunctions()
	{
		$str1="Hello PHP";
		$str2="kkwp college";
		echo "String1=$str1";
		echo "<br>String2=$str2<br>";
		echo "<br>String Functions:";
		echo "<br>Length=".strlen($str1);
		echo "<br>Word Count=".str_word_count($str1);
		echo "<br>Reverse String=".strrev($str1);
		echo "<br>Position of particular String=".strpos($str1,"PHP");
		echo "<br>Upper Case=".strtoupper($str1);
		echo "<br>Lower Case=".strtolower($str1);
		echo "<br>First Letter Upper=".ucwords($str2);
		echo "<br>Replace Word=".str_replace("PHP","Worl,$d",$str1cnt);
		echo "<br>Count of Replace Word=$cnt";
		echo "<br>Repeat String=".str_repeat($str1,5);
		echo "<br>Compare 2 Strings=".strcmp($str1,$str2);
	}
	strFunctions();
?>