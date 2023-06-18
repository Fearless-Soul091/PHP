<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MultiDimensonial Array</title>
</head>
<body>
	<pre>
	<?php 
	$students = [
		[1,'Jishesh Lamichhane','fearlessSoul091@gmail.com','A++'],
		[2, 'Saimon Rai','asfafaf@gmail.com','A+']
	];
			// array() and [] are same in use.
	print_r($students);

	echo $students[1][1];			//*<td> for heading <th>input*/
	 ?>
	 <table border=1>
	 	<tr>				
	 		<th>Roll No.</th>
	 		<th>Name</th>
	 		<th>Gmail</th>
	 		<th>Grade</th>
	 	</tr>
	<?php 
	for ($i=0;$i<2;$i++){ ?>
	
 	<tr>
	 		<th><?php echo $students [$i][0] ?></th>
	 		<td><?php echo $students [$i][1] ?></td>
	 		<td><?php echo $students [$i][2] ?></td>
	 		<td><?php echo $students [$i][3] ?></td>
	 	</tr>
	<?php } ?>


	 </table>
	 </pre>

</body>
</html>