<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	$annual_income= 4578727;
	$gender='Female';
	$martial_status='married';
	if ($martial_status=='married') {
		if ($annual_income <= 45000) {
			$tax= $annual_income * 0.01;
			// code...
	} else if ($annual_income> 45000 && $annual_income<=55000) {
		$tax= 4000 + ($annual_income-40000) * 0.2;
		} else if ($annual_income >50000 && $annual_income<=80000) {
		$tax= 4000 + 10000 +($annual_income-50000) * 0.2;
		} else if ($annual_income> 80000 && $annual_income<=150000) {
		$tax= 40000+ 10000 + 60000 + ($annual_income -80000) * 0.3;
		} else{
			$tax = 4000 + 10000+ 60000 + 150000 +($annual_income- 150000)* 0.36;
		}
		
	}
	if ($gender == 'female'){
		$tax= $tax - ($tax * 0.1);
	}
	echo 'Final Tax is ' .$tax;
	 ?>
	

</body>
</html>