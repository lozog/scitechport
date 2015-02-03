<form name ="register" Method ="POST" Action="index.php" id="register" enctype="multipart/form-data">
<h4>Register</h4>
<div id="txtf">
<p>* denotes required field.</p>
<Input Type = "text" <?php echo $_SESSION['first_name']; ?>  Name ="first_name"><?php
if ($_SESSION['submit'][0] == TRUE)
	echo "*";
?> <br />
<Input Type = "text" <?php echo $_SESSION['last_name']; ?>  Name ="last_name"><?php
if ($_SESSION['submit'][1] == TRUE)
	echo "*";
?> <br />
<Input Type = "text" <?php echo $_SESSION['student_number']; ?> maxlength="6" onkeypress="return onlyNumbers();" Name ="student_number"><?php
if ($_SESSION['submit'][2] == TRUE)
	echo "*";
?> <br />
<Input Type = "text" <?php echo $_SESSION['email']; ?>  Name ="email"><?php
if ($_SESSION['submit'][3] == TRUE)
	echo "*";
?> <br />
<p class="grade">Grade: </p><select name ="grade">
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select><br />
<Input Type = "password" <?php echo $_SESSION['password']; ?>  Name ="password"><?php
if ($_SESSION['submit'][5] == TRUE)
	echo "*";
?> <br />
<Input Type = "password" <?php echo $_SESSION['confirm_password']; ?>  Name ="confirm_password"><?php
if ($_SESSION['submit'][6] == TRUE)
	echo "*";
?>
</div>
<Input Type = "Submit" Name = "Submit2" Value = "Register">
</form>


