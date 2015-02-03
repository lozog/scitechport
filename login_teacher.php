<?php
						if ($_SESSION['$wrong_user_teacher'] == TRUE)
						{
						echo "<script>noty({'text':'That user does not exist.','layout':'top','type':'error','animateOpen':{'height':'toggle'},'animateClose':{'height':'toggle'},'speed':500,'timeout':5000,'closeButton':false,'closeOnSelfClick':true,'closeOnSelfOver':false,'modal':false});</script>";
						}
						elseif ($_SESSION['$wrong_password_teacher'] == TRUE)
						{
						echo "<script>noty({'text':'Incorrect password. Please try again.','layout':'top','type':'error','animateOpen':{'height':'toggle'},'animateClose':{'height':'toggle'},'speed':500,'timeout':5000,'closeButton':false,'closeOnSelfClick':true,'closeOnSelfOver':false,'modal':false});</script>";
						}
?>

<div id="login">
<h4>Sign In</h4>
<form name ="login" Method ="POST" Action="index.php" enctype="multipart/form-data">
<div id="txtf">
<Input Type = "text" placeholder ="Teacher"  Name ="teacher_login"> <br />
<Input Type = "password" placeholder ="Password"  Name ="teacher_password"> <br />
</div>
<Input Type = "Submit" Name = "Submit_teacher" Value = "Log in">
</form>
<div id="btm">
<a href="?register=2">Register</a>
<a href="?login=2">Student Sign In</a>
</div>
</div>
