<?php 
if (isset($_POST['btnLogin'])) {
	if (isset($_POST['Username']) && !empty($_POST['Username'])&& trim($_POST['Username'])) {
		$username =  $_POST['Username'];
  	} else {
  		$errUsername =  'Enter Username';
  	}

  	if (isset($_POST['Password']) && !empty($_POST['Password'])) {
  		echo 'Password is ' . $_POST['Password'];
  	} else {
  		$errPassword =  'Enter Password';
  		if (count($err)==0) {
  			//process to login into success
  			if ($username== 'admin' && $password== 'admin123') {
  				echo 'login Successful';
  				//redirect to next page
  				// header('Location:dashboard.php');
  				else {
  					echo 'Login Failed';
  				}
  			}
  		}
  	}
  }
   ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style type="text/css">
		.form-group{

		}
		.form-group{
			width: 100px;
			display: = "inline-block";
		}
	</style>
</head>
<body>
	<h1>Login Page</h1>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="form-group">
			
		</div>
		
	</form>

</body>
</html>