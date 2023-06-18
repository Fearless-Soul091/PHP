<?php 
	if(isset($_POST['Save'])){
	
	if(isset($_POST['Name']) &&!empty($_POST['Name'])){
		$name=$_POST['Name'];
	}else{
		$errName='Enter Name';
	}
	if(isset($_POST['Code'])&&!empty($_POST['Code'])&& trim($_POST['Code'])){
		$code=$_POST['Code'];
	}else{
		$errCode='Enter Code';
	}
	if(isset($_POST['Rank']) &&!empty($_POST['Rank'])){
		$rank=$_POST['Rank'];
	}else{
		$errRank='Enter Rank';
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
</head>
<style type="text/css">
	.error{
		color:red;
	}
	fieldset{
		width: 250px;
		margin-left: auto;
		margin-right: auto;
			}

</style>
<body>
	<fieldset>
		<legend>List categories</legend>
	
	<form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="post" class="f">
		<label for="name">Name</label>
		<input type="text" name="name" value="<?php echo(isset($name)?$name:"");?>">
		<span class="error">
		<?php
			echo(isset($errName)?$errName:"");
			?>
		</span>
		<br>
		<br>
		<label for="Code">Code:</label>
		<input type="Code" name="Code" value="<?php echo(isset($code)?$code:"");?>">
		<span class="error">
			<?php 
				echo(isset($errCode)?$errCode:"");
			 ?>
			</span>
		<br>
		<br>
		<label for="rank">Rank:</label>
		<input type="text" name="Rank" value="<?php echo(isset($rank)?$rank:"");?>">
		<span class="error">
		<?php
			echo(isset($errRank)?$errRank:"");
			?>
		</span>
		<br>
		<p>Status:
		<input class="one" type="radio" name="status" value="active" checked>Active
		<input type="radio" name="status" value="deactive">Deactive
		</p>
		<br>
		<br>
		<input type="submit" name="Save">
</form>

</fieldset>
</body>
</html>