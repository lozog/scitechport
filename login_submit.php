<?php
//Encryption function
include("saltpass.php");
include("connect_db.php");

// Removed 2015-04-13
// connect to the scitechport database in the server
// mysql_select_db("scitechport", $con);

$_SESSION['$wrong_user'] = FALSE;
$_SESSION['$wrong_password'] = FALSE;

	// Tells the user if they forgot a field
	if (!$_POST['student_number'] | !$_POST['password'])
	{
		die('You did not fill in a required field.');
	}
	
	// Checks the password hash against the database
	$check = mysqli_query($connection, "SELECT * FROM Users WHERE student_number = '" . $_POST['student_number'] . "'") or die(mysqli_error());
	
	//Gives error if user dosen't exist
	$check2 = mysqli_num_rows($check);
	if ($check2 == 0)
	{
		$_SESSION['$wrong_user'] = TRUE;
	}
	while ($info = mysqli_fetch_array($check))
	{
		//Makes the inputted password match the database's hash and prevents MySQL injections
		$_POST['password'] = stripslashes($_POST['password']);
		$_POST['password'] = saltpass($_POST['password'], "89ff66c48895b96d77d16837c10d243c");
		
		//gives error if the password is wrong
		if ($_POST['password'] != $info['password_hash'])
		{
			$_SESSION['$wrong_password'] = TRUE;
		}
		else // if login is ok then we add a cookie 
		{
			$_POST['student_number'] = stripslashes($_POST['student_number']);
			$hour                    = time() + 3600;
			setcookie(ID_my_site, $_POST['student_number'], $hour);
			setcookie(Key_my_site, $_POST['password'], $hour);
		}
	}
?>

<script type="text/javascript">
		window.location = "index.php"
</script>