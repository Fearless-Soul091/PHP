<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>afa</title>
</head>
<body>
	<?php 
	$student = ['ayudh','atul','Jishesh','Ram','Hari'];
	print_r($student);

	 ?>
	 <ul>

	 <?php 
	 		 	for ($i=0;$i<4;$i++){
	 		echo '<li>' .$student[$i]. '</li>';
	 	}
	 
	 ?>
	 </ul>
	 <?php 
	
	 foreach ($student as $index => $name) {
	 	echo $index+1 . '-' .$name . 
	 	"<br>";
	 }
	 $info = ['name'=>'ram','Roll no'=>'24','Email'=>'furiow@gmail.com'];
	 foreach ($info as $index => $value) {
	 	echo ucfirst($index) .'-' .$value . '<br>';
	 }
	  ?>

   
</body>
</html>