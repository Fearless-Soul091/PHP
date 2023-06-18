<?php 
$name="";
	if(isset($_POST['submit']))
	{
		if(isset($_POST["name"]) && !empty($_POST["name"]))
		{
		
			$name = $_POST["name"];

		}
		else
		{
			$err = "Enter name";
		}


	
	if(isset($_POST["mail"]) && !empty($_POST["mail"]) && filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL))
	{
		$mail = $_POST["mail"];
	}
	elseif (empty($_POST["mail"])) {
	 	$ermf = "Email field is empty";
	}
	else
	{
		$erm = "Enter in proper format";
	}
}		

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="POST">

		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" value="<?php echo (isset($name)?$name:"");?>">
				</td>
				<td><?php echo(isset($err)?$err:"");?></td>
			</tr>
			<tr>
				<td>Age</td>
				<td>
					<input type="age" name="a">

				</td>
			</tr>

			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="mail" value="<?php echo (isset($mail)?$mail:"");?>">
				</td>

				<td><?php echo(isset($ermf)?$ermf:"");?></td>
				<td><?php echo(isset($erm)?$erm:"");?></td>

			</tr>
			<tr>
				<td>Gender</td>
				<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
				</td>
			</tr>

			<tr>
				<td>
					<select name="country">
						<option>Select country</option>\
						<option>Nepal</option>
						<option>U.S.A</option>
						<option>Germany</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="submit">Submit</button>
				</td>
			</tr>
		</table>		
	</form>
</body>
</html>
