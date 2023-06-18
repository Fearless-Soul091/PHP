<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	$person= array('Why','roll no.'=>12 ,
		'Name'=>'Jishesh',
		'Address'=>'Lalitpur',
		'Balance'=>24456.23,
		'Value'=>true);

	print_r($person);
	 ?>
	 <table border=1>
 	<tr>
 		<th>Roll No.</th>
 		<th><?php echo $person['roll no.'] ?></th>
 	</tr>
 	<tr>
 		<th>Name</th>
 		<th><?php echo $person['Name'] ?></th>
 	</tr>
 	<tr>
 		<th>Address</th>
 		<th><?php echo $person['Address'] ?></th>
 	</tr>
 	<tr>
 		<th>Balance Point</th>
 		<th><?php echo $person['Balance'] ?></th>
 	</tr>
 	<tr>
 		<th>Value</th>
 		<th><?php echo $person['Value'] ?></th>
 	</tr>

</body>
</html>