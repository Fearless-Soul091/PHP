<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multidimensonal Array using forLoop</title>
</head>
<body>
<pre>
	<?php 
	echo 'Marks Of The Student';
	$class=[
		[15,'Jishesh Lamichhane',25,32,40,38,22,20],
		[12,'Anjan Bhandari',20,23,40,33,12,],
		[23,'Saiman Rai',32,23,24,25,26],
		[13,'Neetesh Shakya',31,13,38,23,29],
		[20,'Ayush Katwal',25,32,40,38,22,20],
		[22,'Atul Shaday',13,21,31,32,23,34],
		[33,'Aryan Bhatta',22,33,22,32,33,],
		[14,'Denish Tamrakar',40,34,28,39,30],
		[22,'Prasanna Thapa Magar',22,24,26,28,32],
		[32,'Sanjay Sakya',23,40,32,37,39]
	];
		 ?>
	 <table border=1>
	 	<tr>
	 		<th>Roll No.</th>
	 		<th>Name</th>
	 		<th>Cost&Managment</th>
	 		<th>DSA</th>
	 		<th>Economices</th>
	 		<th>DBMS</th>
	 		<th>WEB II</th>
	 		<th>Sum</th>
	 	</tr>
	 	<?php
	 	for ($i=0;$i<10;$i++) {

	 	 ?>
	 	 <tr>
	 	 	<th><?php echo $class[$i][0] ?></th>
	 	 	<th><?php echo $class[$i][1] ?></th>
	 	 	<th><?php echo $class[$i][2] ?></th>
	 	 	<th><?php echo $class[$i][3] ?></th>
	 	 	<th><?php echo $class[$i][4] ?></th>
	 	 	<th><?php echo $class[$i][5] ?></th>
	 	 	<th><?php echo $class[$i][6] ?></th/>
	 	 	
	 	 </tr>
	 	<?php } ?>
	 </table>
</pre>
</body>
</html>