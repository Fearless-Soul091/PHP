<pre>
	<?php 
print_r($_POST);
print_r($_FILES);
if (isset($_POST['btnupload'])) {
	$error = [];

	if ($_FILES['doc']['error'] ==0) {
		if ($_FILES['doc']['size']<=512000) {
			if ($_FILES['doc']['type']== 'docx') {
				move_uploaded_file($_FILES['doc']['temp_name'],
					'image/'. $_FILES['doc']['name']);
			}else {
				$error['doc']='File must be DOCXd';
			}


	}else {
		$error['doc']= " File size too large: max:500kb";
	}
}else{
	$error['doc']='Please select File';
		
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
		<input type="file" name="doc">
		<?php if (isset($error['doc'])) {
			echo $error['doc'];
			
		} ?>
		<br>
		<input type="Submit" name="btnupload">
	</form>

</body>
</html>