<?php
//Encryption function
include("saltpass.php");
include("connect_db.php");


	// Tells the user if they forgot a field
	if (!$_POST['teacher_login'] | !$_POST['teacher_password'])
	{
		die('You did not fill in a required field.');
	}
	
	// Checks the password hash against the database
	$teacher_table = mysqli_query($connection, "SELECT * FROM Teachers WHERE teacher_name = '" . $_POST['teacher_login'] . "'") or die(mysql_error());
	
	//Gives error if user dosen't exist
	$check3 = mysqli_num_rows($teacher_table);
	if ($check3 == 0)
	{
		$_SESSION['$wrong_user_teacher'] = TRUE;
	}
	while ($info = mysqli_fetch_array($teacher_table))
	{
		$_POST['teacher_password'] = stripslashes($_POST['teacher_password']);
		$_POST['teacher_password'] = saltpass($_POST['teacher_password'], "89ff66c48895b96d77d16837c10d243c");
		
		//gives error if the password is wrong
		if ($_POST['teacher_password'] != $info['password_hash'])
		{
			$_SESSION['$wrong_password_teacher'] = TRUE;
		}
		else // if login is ok then we add a cookie 
		{
			$_POST['teacher_login'] = stripslashes($_POST['teacher_login']);
			$hour                    = time() + 3600;
			setcookie(ID_my_site, $_POST['teacher_login'], $hour);
			setcookie(Key_my_site, $_POST['teacher_password'], $hour);
			setcookie(teacher, 1, $hour);
		}
	}



?>
<script type="text/javascript">
		window.location = "index_teacher.php"
</script>