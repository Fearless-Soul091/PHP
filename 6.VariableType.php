<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	$name='Jishesh';
	var_dump($name);
	$age=20;
	var_dump($age);
	$address='Lalitpur';
	var_dump($address);
	$weight=05456;
	var_dump($weight);
	$price=1_3452;
	var_dump($price);
	echo '<br>';
	echo <<<"hello"
	Lorem ipsum dolor sit $weight amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
hello;
	echo '<br>';
	$test= null;
	echo $test; 		//It won't give any output
	var_dump($test);
	$file= fopen('4.ThirdFile.php', 'r');
	var_dump($file);

	 /*
	  8 data Types:
	 Simpal type: integer, float, string, boolean,
	 special type: nulll, resource
	 complex Type: array,object 
	 */
	/* 		array is collection of data 	*/
	 ?>
</body>
</html>
