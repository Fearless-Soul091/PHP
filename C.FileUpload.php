<pre>
	<?php 
print_r($_POST);
print_r($_FILES);
if (isset($_POST['btnupload'])) {
	$error = [];

	if ($_FILES['photo']['error'] ==0) {
		if ($_FILES['photo']['size']<=512000) {
			if ($_FILES['photo']['type']== 'image/JPEG') {
				move_uploaded_file($_FILES['photo']['temp_name'],
					'image/'. $_FILES['photo']['name']);
			}else {
				$error['photo']='File must be JEPG';
			}
	}else {
		$error['photo']= " File size too large: max:500kb";
	}
}else{
	$error['photo']='Please select File';
		
	print_r($error);
	}
}
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<pre>
	<form action="" method="post" enctype="multipart/form-data">
		<label>Image</label>
		<input type="file" name="photo">
		<?php if (isset($error['photo'])) {
			echo $error['photo'];
			
		} ?>
		<br>
		<input type="Submit" name="btnupload">
	</form>

</body>
</html>