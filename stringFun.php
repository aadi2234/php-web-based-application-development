<?php
	function stringFun()
	{
		$str1='KKWP \'College';
		$str2='C:\\WINDOWS';
		$str3=<<<E
		Hi
		Hello
		Aditya Here,
		How are u?
		E;
		echo $str3;
		
		echo '{$str1} and {$str2}';
		echo "<br>{$str1} and {$str2}";
		echo  $str1."<br>";
		echo  $str2;
	}
	stringFun()
?>