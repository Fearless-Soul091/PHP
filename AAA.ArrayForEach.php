<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Web</title>
	
</head>
<body>
	<pre>
	<?php 
	$marks = [
		['Name'=> 'Jishesh Lamichhane','Roll No'=>15,'WEB-II'=>40,'DBMS'=>33,'Account'=> 44,'DSA'=>34,'Economic'=>55],
		['Name'=> 'Ayush Katwal','Roll No'=>12,'WEB-II'=>40,'DBMS'=>10,'Account'=> 44,'DSA'=>45,'Economic'=>55],
		['Name'=> 'Atul Dhital','Roll No'=>44,'WEB-II'=>40,'DBMS'=>33,'Account'=> 44,'DSA'=>34,'Economic'=>55],
		
		];
		print_r($marks)
	?>
	 		 	
	 	 <table border=1>
	 	 	<tr>
	 	 		<th>SN</th>
	 		<th>Name</th>
	 		<th>Roll No</th>
	 		<th>WEB-II</th>
	 		<th>DSA</th>
	 		<th>Economic</th>
	 		<th>DBMS</th>
	 		<th>Account</th>
	 		<th>Total</th>
	 	</tr>
	 	<tr>
	 	<?php foreach ($marks as $key => $record) { 
	 		$Total = $record['Economic']+$record['DSA']+$record['DBMS']+$record['WEB-II']+$record['Account'];
	 		?>

	</tr>
		 	<tr>
		 		<th><?php echo $key+1 ?></th>
	  		<th><?php echo $record['Name'] ?></th>
	 		<th><?php echo $record['Roll No'] ?></th>
	 		<th><?php echo $record['DSA'] ?></th>
	 		<th><?php echo $record['DBMS'] ?></th>
	 		<th><?php echo $record['Account'] ?></th>
	 		<th><?php echo $record['Economic'] ?></th>
	 		<th><?php echo $record['WEB-II'] ?></th>
	 		<th><?php echo $Total ?></th>
	 	</tr>
<?php } ?>
	</table>
</body>
</html>