<?php
						if ($_SESSION['$wrong_user'] == TRUE)
						{
						//echo "<script>noty({'text':'That user does not exist.','layout':'top','type':'error','animateOpen':{'height':'toggle'},'animateClose':{'height':'toggle'},'speed':500,'timeout':5000,'closeButton':false,'closeOnSelfClick':true,'closeOnSelfOver':false,'modal':false});</script>";
						echo("That user does not exist.");
						}
						elseif ($_SESSION['$wrong_password'] == TRUE)
						{
						//echo "<script>noty({'text':'Incorrect password. Please try again.','layout':'top','type':'error','animateOpen':{'height':'toggle'},'animateClose':{'height':'toggle'},'speed':500,'timeout':5000,'closeButton':false,'closeOnSelfClick':true,'closeOnSelfOver':false,'modal':false});</script>";
						echo("Incorrect password, please try again.");
						}
?>
	<script type = "text/javascript">
	function onlyNumbers(evt)
	{
		var e = event || evt; 
		var charCode = e.which || e.keyCode;

		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;

		return true;

	}
	</script>
<div id="login">
<h4>Sign In</h4>
<form name ="login" Method ="POST" Action="index.php" enctype="multipart/form-data">
<div id="txtf">
<Input Type = "text" placeholder ="Student Number" maxlength="6" onkeypress="return onlyNumbers();" Name ="student_number"> <br />
<Input Type = "password" placeholder ="Password"  Name ="password"> <br />
</div>
<Input Type = "Submit" Name = "Submit1" Value = "Log in">
</form>
<div id="btm">
<a href="?register=2">Register</a>
<a href="?login_teacher=2">Teacher Sign In</a>
</div>
</div>
