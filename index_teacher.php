<?php
session_start();

include 'connect_db.php';
include 'saltpass.php';
if ($_GET['logout'] == 2) {
	include 'logout_teacher.php';
	}
	
if (isset($_COOKIE['signed']))
    {
 $rubric_item = $_COOKIE['signed'];
 ?>
 <script type="text/javascript">
 function setCookie1(name,val,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+val+expires+"; path=/";
}
 setCookie1('signed', '', -1);
 </script>
 <?php
 
 $student5 = $_COOKIE['student_number'];
 mysqli_query($connection, "UPDATE Progress SET $rubric_item = 3 WHERE student_number = $student5") or die(mysql_error());
 
 }

?>
<!DOCTYPE>
<html class="no-js">
<head>
	<title>portfoliopro</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="js/modernizr.js"></script>
	<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
	<script src="js/placeholder.js"></script>
	<script src="js/student_id.js"></script>
	<script src="js/num-only.js"></script>
	<script src="js/cookies.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.php"><div id="logo"></div></a>
	</div>
	
		<div id="navcontainer">
		<ul id="actionbar" class="teacher">
			<li id="item" onclick="location.href='?logout=2';"><div id="icon" class="logout"></div><p class="text">Log Out</p></li>
		</ul>
		<?php 
		{
		?>
		<ul id="actionbar" class="teacher">
			<li id="item" onclick="goBack()"><div id="icon" class="back"></div><p class="text">Back</p></li>
		</ul>
		<?php
		}
		?>
	</div>
	<div id="content">
	<?php
	if (isset($_COOKIE['student_number']))
    {
	$student_number_rubric = $_COOKIE['student_number'];
	include 'rubric/teacher_rubric.php';
	}
	else
	{
	?>
	<table id="rubric">
		<tr>
		<td>Student Number</td><td>First Name</td><td>Last Name</td>
		</tr>
		<?php
		$student_list   = mysqli_query($connection, "SELECT * FROM Users") or die(mysql_error());
		while ($row3 = mysqli_fetch_array($student_list))
		{
			$student_number = $row3['student_number'];
			$first_name = $row3['first_name'];
			$last_name = $row3['last_name'];
			echo "<tr>"; ?>
			 <td onclick="setCookie('student_number', '<?php echo $student_number; ?>', 3); window.location = 'index_teacher.php';"><?php echo $student_number; ?></td><td><?php echo $first_name; ?></td><td><?php echo $last_name; ?></td> 
			<?php echo "</tr>";
		}
		
	}
	?>
	</table>
	</div>
</body>
</html>