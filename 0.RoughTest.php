<?php 	
		 //check for form submission instance
  if (isset($_POST['login'])) {
  	//check for username field
  	if (isset($_POST['Name']) && !empty($_POST['Name']) && trim($_POST['Name'])) {
  		$username =  $_POST['Name'];
  	} else {
  		$errUsername =  'Enter Username';
  	}

  	if (isset($_POST['password']) && !empty($_POST['password'])) {
  		echo 'Password is ' . $_POST['password'];
  	} else {
  		$errPassword =  'Enter Password';
  	}
  }
  	if (isset($_POST['Email']) && !empty($_POST['Email']) && trim($_POST['Email'])) {
  		$Email = $_POST['Email'];
  	}
  		else {
  			$errEmail = 'Enter Your Email';
  		}
  	if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) {
  		$Phone = $_POST['phone'];
  	}
  		else {
  			$errPhone = 'Enter Your Ph.Number';
  		}
  	if (isset($_POST['Gender']) && !empty($_POST['Gender'])) {
  		echo 'Gender is ' . $_POST['Gender'];
  	}
  		else {
  			$errGender = 'Select Gender';
  		}	

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form </title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
			<div style="width:50%">
			<fieldset>
			<legend>Student's form</legend>
			<table width="90" align="center">
			<tr> 
				<td> Name:</td>
				<td>
					<input type="text" name="Name" value="<?php echo (isset($username)?$username:''); ?>" >
					<span class ="error">
						<?php 
							// if (isset($errUsername)) {
							// 	echo $errUsername;
							// }
							echo (isset($errUsername)?$errUsername:'');
						 ?>
						</span>
				</td>
			</tr>
			<tr> 
				<td> Email:</td>
				<td>
					<input type="Email" name="Email" value="<?php echo (isset($Email)?$Email:''); ?>" >
					<span class="error">
						<?php 
							echo (isset($errEmail)?$errEmail:'');
						 ?>
						</span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="Password" name="password">
					<span class="error">
						<?php 
							echo (isset($errPassword)?$errPassword:'');
						 ?>
						</span>
				</td>
			</tr>
				<td>Phone:</td>
				<td>
					<input type="text" name="phone" value="<?php echo (isset($Phone)?$Phone:''); ?>">
					<span class="error">
						<?php 
							echo (isset($errPhone)?$errPhone:'');
						 ?>
						</span>
				</td>
			</tr>
			<tr>
				Country: <select name="Country">
				<option value=1 selected>Please select a country
				<option value=2>Nepal
				<option value=3>India
				<option value=4>Maldives
				</select></tr> <br>
			<tr>
			 Gender
			<input type="radio" name="Gender">Male
			<input type="radio" name="Gender">Female
			<span class="error">
						<?php 
							echo (isset($errGender)?$errGender:'');
						 ?>
						</span>
			</tr>
			<tr>
				<td><button type="Submit" name="login">Submit</button></td>
				</tr>
			
		</form>
</body>
</html>
