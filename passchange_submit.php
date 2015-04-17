<?php
//include 'saltpass.php';
include 'connect_db.php';
	

// Checks the password hash against the database
$student_number = $_COOKIE['ID_my_site'];
$password_cookie = $_COOKIE['Key_my_site'];
$pw_check = mysql_query("SELECT * FROM Users WHERE student_number = '$student_number'") or die(mysql_error());
while ($info3 = mysql_fetch_array($pw_check))
{
    $_POST['password_old'] = stripslashes($_POST['password_old']);
    
    
    $_POST['password_old'] = saltpass($_POST['password_old'], "89ff66c48895b96d77d16837c10d243c");
    
    //gives error if the password is wrong
    if ($_POST['password_old'] != $info3['password_hash'])
    {
        die('Incorrect password, please try again.');
    }
    else // checks if the two passwords match
    {
        if ($_POST['password'] != $_POST['password_confirm'])
        {
            die('The passwords must match.');
        }
        else
        {
			$update_password = saltpass($_POST['password'], "89ff66c48895b96d77d16837c10d243c");
            mysql_query("UPDATE Users SET password_hash = '$update_password' WHERE student_number = '$student_number'");
			setcookie(Key_my_site, $_POST['password'], $hour);
            echo "Password successfully changed!";
			
			
        }
    }
}
?>