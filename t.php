<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table,tr,td{
			border: 2px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<?php 

		$movies = [
						["name"=>"K.G.F-2","time"=>"3:00:00","make_year"=>"2022","artist"=>"Rocking Star Yash","director"=>"Prashant Neel"],
						["name"=>"Munna Bhai MBBS","time"=>"3:00:00","make_year"=>"2003","artist"=>"Sanjay Dutt","director"=>"Rajkumar Hirani"]					
		];
	?>	
	<table>
		<tr>
			<td>Name</td>
			<td>Time</td>
			<td>Make Year</td>
			<td>Artist</td>
			<td>Director</td>
		</tr>
		
			<?php

			 //	for($i=0; $i<2; $i++) {
			 		foreach ($movies as $key => $value) {
				 	?>
			 <tr>
			 	<td><?php echo $value["name"];?> </td>
			 	<td><?php echo $value["time"];?> </td>
			 	<td><?php echo $value["make_year"];?> </td>
			 	<td><?php echo $value["artist"];?> </td>
			 	<td><?php echo $value["director"];?> </td>
			 	</tr>
			 <?php } ?>	
	</table>
</body>
</html>