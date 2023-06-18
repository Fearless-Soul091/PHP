	<?php 
//print_r($_POST);
//print_r($_GET);
//print_r($_REQUEST);
echo 'My Username is' . $_POST['Username']
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Example</title>
</head>
<body>
	<h1>Form Handling</h1>
	<!--
	1)Use action and method attribuyr into formm tag
		Action: Page/Location to send form data,defukt is same page
		Method: way to send form data/ way to send form request to server,
		get,post,put,patch,dealer: default get
	2) Use name attribute for every form elements
	3)  Use $_get or $_post array to extract data enterned by user depending upon method name
	-->
	<form action= "<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<label for="Username">Username</label>
		<input type="text" name="Username">
		<br>
		<label for="password">Password</label>
		<input type="Password" name="Password" >
		<br>
		<input type="Submit" name="btnLogin">
		<input type="Clear" name="btnreset">
		<br>
	</form>

</body>
</html>