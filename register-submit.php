<?php

//Password encryption function
include("saltpass.php");


//Connect to the database
// include("connect_db.php");

$pcount = 0;

//Lets the user know if they forgot to enter a field

//First name
if ($_POST['first_name'] != "")
{
	$_SESSION['submit'][0]  = FALSE;
	$first_name             = $_POST['first_name'];
	$first_name = strtolower($first_name);
	$first_name[0] = strtoupper($first_name[0]);
	$_SESSION['first_name'] = "value='$first_name'";
	$pcount++;
}
else
{
	$_SESSION['submit'][0]  = TRUE;
	$_SESSION['first_name'] = "placeholder='First Name'";
}

//Last name
if ($_POST['last_name'] != "")
{
	$_SESSION['submit'][1] = FALSE;
	$last_name             = $_POST['last_name'];
	$last_name = strtolower($last_name);
	$last_name[0] = strtoupper($last_name[0]);
	$_SESSION['last_name'] = "value='$last_name'";
	$pcount++;
}
else
{
	$_SESSION['submit'][1] = TRUE;
	$_SESSION['last_name'] = "placeholder='Last Name'";
}

//Student number
if ($_POST['student_number'] != "")
{
	$_SESSION['submit'][2]      = FALSE;
	$student_number             = $_POST['student_number'];
	$_SESSION['student_number'] = "value='$student_number'";
	$pcount++;
}
else
{
	$_SESSION['submit'][2]      = TRUE;
	$_SESSION['student_number'] = "placeholder='Student Number'";
}

//email
if ($_POST['email'] != "")
{
	$_SESSION['submit'][3] = FALSE;
	$email                 = $_POST['email'];
	$_SESSION['email']     = "value='$email'";
	$pcount++;
}
else
{
	$_SESSION['submit'][3] = TRUE;
	$_SESSION['email']     = "placeholder='Email'";
}

//Grade
if ($_POST['grade'] != "")
{
	$_SESSION['submit'][4] = FALSE;
	$grade                 = $_POST['grade'];
	$_SESSION['grade']     = "value='$grade'";
	$pcount++;
}
else
{
	$_SESSION['submit'][4] = TRUE;
	$_SESSION['grade']     = "placeholder='Grade'";
}

//Password
if ($_POST['password'] != "")
{
	$_SESSION['submit'][5] = FALSE;
	$password              = $_POST['password'];
	$_SESSION['password']  = "value='$password'";
	$pcount++;
}
else
{
	$_SESSION['submit'][5] = TRUE;
	$_SESSION['password']  = "placeholder='Password'";
}

//Confirm password
if ($_POST['confirm_password'] != "")
{
	$_SESSION['submit'][6]        = FALSE;
	$confirm_password             = $_POST['confirm_password'];
	$_SESSION['confirm_password'] = "value='$confirm_password'";
	$pcount++;
}
else
{
	$_SESSION['submit'][6]        = TRUE;
	$_SESSION['confirm_password'] = "placeholder='Confirm Password'";
}

//Runs if all the fields are entered
if ($pcount == 7)
{
if ($password != $confirm_password)
{
echo "Error. Passwords must match.";
}
else
{
if (strlen($student_number) != 6)
{
echo "Error. Student number must be 6 digits.";
}
else
{
	$password_hash = saltpass($password, "89ff66c48895b96d77d16837c10d243c");
	$result = mysqli_query($connection, "SELECT * FROM Users" );
while ( $row = mysqli_fetch_array( $result ) )
{
	if($row['student_number'] == $student_number)
	{
		$dupe_student = TRUE;
	}
}
	
	if ($dupe_student != TRUE)
	{
	// insert account information into Users table
	mysqli_query($connection, "INSERT INTO Users (student_number, password_hash, email, grade, first_name, last_name)
			VALUES ('$student_number', '$password_hash', '$email', '$grade', '$first_name', '$last_name')");
			
	// Create progress row in Progress table
	mysqli_query($connection, "INSERT INTO Progress (student_number)
	VALUES ('$student_number')");
	// sends email to user
	include 'email_function.php';
	email($email, $password, $student_number);
	
	//Makes the student folder + all the files
	include 'student_mkdir.php';
	make_student_folder($student_number);
	
	//Redirects users to the login page
	//header("Location: login.php");
	}
	else
	{
		echo "Error. Duplicate student number detected. Please contact an administrator.";
	}
}
}
}
?>