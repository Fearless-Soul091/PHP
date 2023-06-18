<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Web</title>
	<style>
		.Fail{
			background-color: red;
		}
        .Pass{
            background-color: greenyellow;
        }

	</style>
</head>
<body>
	<?php 
	$marks = [
		['Name'=> 'Jishesh Lamichhane','Roll No'=>15,'WEB-II'=>40,'DBMS'=>33,'Account'=> 44,'DSA'=>34,'Economic'=>45],
		['Name'=> 'Ayush Katwal','Roll No'=>12,'WEB-II'=>40,'DBMS'=>10,'Account'=> 44,'DSA'=>45,'Economic'=>55],
		['Name'=> 'Atul Dhital','Roll No'=>44,'WEB-II'=>30,'DBMS'=>33,'Account'=> 44,'DSA'=>34,'Economic'=>45],
		['Name'=> 'Saimon Rai','Roll No'=>31,'WEB-II'=>40,'DBMS'=>33,'Account'=> 44,'DSA'=>34,'Economic'=>55],
		['Name'=> 'Anjan Bhandari','Roll No'=>5,'WEB-II'=>34,'DBMS'=>15,'Account'=> 44,'DSA'=>45,'Economic'=>25],
		['Name'=> 'manjan kandari','Roll No'=>25,'WEB-II'=>330,'DBMS'=>33,'Account'=> 44,'DSA'=>34,'Economic'=>155],
		['Name'=> 'Powel Nepali','Roll No'=>17,'WEB-II'=>40,'DBMS'=>33,'Account'=> 44,'DSA'=>34,'Economic'=>50],
		['Name'=> 'Parash basnet','Roll No'=>22,'WEB-II'=>38,'DBMS'=>19,'Account'=> 44,'DSA'=>45,'Economic'=>45],
		['Name'=> 'Rakesh Vakesh','Roll No'=>30,'WEB-II'=>37,'DBMS'=>36,'Account'=> 44,'DSA'=>34,'Economic'=>48],
		
		];
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
	 		<th>Percent</th>
	 		<th>Result</th>
	 	</tr>
	 	<?php for($i=0; $i<count($marks); $i++) { 
	 		$Total= $marks[$i]['WEB-II']+ $marks[$i]['DBMS']+ $marks[$i]['Account']+ $marks[$i]['DSA']+ $marks[$i]['Economic'];
	 		$percentage=$Total/5;
	 		$result ='Pass';
	 		if ($marks[$i]['WEB-II'] < 20|| $marks[$i]['DBMS']<20|| $marks[$i]['Account']<20|| $marks[$i]['DSA']<20|| $marks[$i]['Economic']<20)
	 			{ $result = 'Fail';
	 	}	?>
	 	<tr >
		 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $i+1 ?></th>			
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $marks[$i]['Name'] ?></th>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $marks[$i]['Roll No'] ?></th>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $marks[$i]['WEB-II'] ?></th>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $marks[$i]['Account'] ?></th>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $marks[$i]['DBMS'] ?></th>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $marks[$i]['DSA'] ?></th/>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $marks[$i]['Economic'] ?></th/>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $Total ?></th>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $percentage ?></th>
	 	 	<th class="<?php if($result === 'Pass'){ echo 'Pass';}else{ echo 'Fail';} ?>"><?php echo $result ?></th> 	
	 	</tr>
	 	<?php } ?>
	 </table>

</body>
</html>