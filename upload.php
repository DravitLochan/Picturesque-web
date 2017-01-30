<?php
$name = $_FILES['file']['name'];
$type = $_FILES['file']['type'];
$size=$_FILES['file']['size'];
$extension = strtolower(substr($name, strpos($name,'.')+1));
$max_size=2097152;
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];

if(isset($name))					//check if form is submited
{
	if(!empty($name))				//check if the file uploaded is not empty
	{
		$location='uploads/';		//define a location for the files.
		if(($extension=='jpg'||$extension=='jpeg')&&($type=='image/jpeg'||$type=='image/jpg')&&$size<$max_size)
		{
			if(move_uploaded_file($tmp_name, $location.$name))
			{
				echo 'uploaded successfully!<br>';
				echo 'file size = '.$size.' Bytes<br>';
				echo 'file type -> '.$type.'<br>';
			}
		}
		else
		{
			echo 'file must be less than 2mb in size and of jpg or jpeg type!';
		}
	}
	else
	{
		echo 'Please choose a file...';
	}
}

?>

<form  action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br><br>
	<input type="submit" value="Submit">
</form>