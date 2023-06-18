<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String File</title>
</head>
<body>
<h1>string</h1>
<?php 
$_name = 'Jishesh';
$email = 'fearlessSoul091@gamil.com';
$phone = '9847048551';
$address = 'Lalitpur';

 ?>
 <?php 
 echo 'Hello '. $_name ?>
<table border="1px">

	<tr>
		<td>Name</td>
		<td><?php echo $_name ?></td>

	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo $email ?></td>
	</tr>
	<tr>
		<td>Phone No.</td>
		<td><?php echo $phone ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><?php echo $address ?></td>
	</tr>
</table>
</body>
</html>