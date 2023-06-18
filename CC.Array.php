<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Array
	</title>
</head>
<body>
	<h1>Array</h1>
	<pre>
		<?php 
		$boys= ['Jishesh','Ayush', 'Saimon', 'Anjan'];
		$girls= ['Manju','Anju', 'sanju','tanju','Ranju'];
		$students= array_merge($boys,$girls);
		print_r($students);

		//Sorting 
		sort($students);		//sorts in asscending
		print_r($students);		
		rsort($students);		// sorts in descending order(reverse sort)
		print_r($students);

		//array ti string conversion
		echo implode(',', $students);

		//array_push
		array_push($students,'Myself');
		print_r($students);

		//aray remove from first index
		array_shift($students);
		print_r($students);


		//add into first index
		array_unshift($students,'Aryan');
		print_r($students);

		//remove from last 
		array_pop($students);
		print_r($students);

		array_splice($students,5,1);
		print_r($students);

		array_splice($students,5,1,'Anjan');
		print_r($students);



		$bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,';		//hw array map

		//string to array

		$data = explode(' ', $bio);
		print_r($data);

		// write a PHP program to convert dob format.
		$dob = '2012-12-30';
		echo str_replace('/', explode('-', $dob));
		echo implode('/',explode('-', $dob));
		 ?>

</body>
</html>

