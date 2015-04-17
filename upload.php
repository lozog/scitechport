<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>Members</title>
</head>
<body>

<form name ="upload" Method ="POST" Action="upload.php" enctype="multipart/form-data">
Browse: <input type="file" name="file" /> <br />
<Input Type = "Submit" Name = "Submit1" Value = "Upload">
</form>

<?php

//File upload
if (isset($_FILES["file"]))
{
	if (($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/bmp") || ($_FILES["file"]["type"] == "image/png"))
	{
		echo "Filename: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//Uploads the file to the users folder
		move_uploaded_file($_FILES["file"]["tmp_name"], "users/" . $_FILES["file"]["name"]);
		echo "<strong>Upload successful!</strong><br />";
		
	}
	else
	{
		echo "Invalid filetype<br />";
	}
	
}
?>
		
</body>
</html>