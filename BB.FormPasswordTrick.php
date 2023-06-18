<?php 
  //check for form submission instance
  if (isset($_POST['btnLogin'])) {
  	//check for username field
  	if (isset($_POST['Username']) && !empty($_POST['Username']) && trim($_POST['Username'])) {
  		$username =  $_POST['Username'];
  	} else {
  		$errUsername =  'Enter Username';
  	}

  	if (isset($_POST['Password']) && !empty($_POST['Password'])) {
  		echo 'Password is ' . $_POST['Password'];
  	} else {
  		$errPassword =  'Enter Password';
  	}
  }
?>
   <html>
<head>
	<title> form example</title>
	<style type="text/css">
		.error{
			color:red;
		}
	</style>
</head>
     <body>
	<h1> form heading</h1>
	<!--
    1) use action and method attribute into form tag
    action:page/location to send form data,default is same page
    method:way to send form data/way to send form request to server,
    get,post,put,patch,delete :default get

    2) use name attribute for every form element

    3)use $_GET or $_POST

 -->
<form action ="<?php echo$_SERVER['PHP_SELF'] ?>" method="post">
	<label for ="username"> username</label>
	<input type ="text" name="Username" value="<?php echo (isset($username)?$username:''); ?>">
	<span class="error">
	<?php 
		// if (isset($errUsername)) {
		// 	echo $errUsername;
		// }
		echo (isset($errUsername)?$errUsername:'');
	?>
	</span>
	<br> 
	<label for ="password"> Password</label>
	<input type ="password" name="Password">
	<span class="error">
	<?php 
		echo (isset($errPassword)?$errPassword:'');
	?>
	</span>
	<br>
	<input type="submit" name="btnLogin">
	<br>
</body>
</html>
