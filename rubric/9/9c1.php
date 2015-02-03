<?php



//Connect to the SciTechPort database

include("connect_db.php");



// connect to the scitechport database in the server

mysql_select_db("scitechport", $con);



?>



<html>

<head>

	

	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

	

</head>

<body>
<h2>Now editing: At least one unique item involving community work and/or extracurricular involvement (i.e. volunteering, school clubs, councils) with a completed reflection(s).</h2>
	<form method="post">

			<?php

			

	$student_number = $_COOKIE['ID_my_site'];

			

    if (isset($_POST['editor']))

    {

        $editor_data = $_POST['editor'];

        

        $myFile = "users/" . $student_number . "/9/9c1.html";

        $fh     = fopen($myFile, 'w');

		$editor_data2 = stripslashes($editor_data);

        fwrite($fh, $editor_data2);

        fclose($fh);

    }

    

    

    $myFile = "users/" . $student_number . "/9/9c1.html";

    $fh = fopen($myFile, 'r');

    $fs = filesize($myFile);

	//progress information for each individual file

    $progress_data = mysql_query("SELECT * FROM Progress WHERE student_number = '$student_number'");

    //If the file is blank, it displays default text in the editor, otherwise it displays the data from the file

	//Also, "not worked on" is set in the database

    if ($fs == 0)

    {

        $data = "Click here to begin!";

		

		mysql_query("UPDATE Progress SET 9c1 = 0 WHERE student_number = '$student_number'");

    }

    else

    {

		$data = fread($fh, filesize($myFile));

		mysql_query("UPDATE Progress SET 9c1 = 1 WHERE student_number = '$student_number'");

        

    }

    

?>

		<p>



			<textarea id="editor" name="editor"><?php

    echo $data;

?></textarea>

			<script type="text/javascript">

				CKEDITOR.replace( 'editor');

			</script>

		</p>
		<Input ID = "finishedsubmit" Type = "Submit" Name = "isDone" Value = "Mark as finished.">
		<Input ID = "unfinishedsubmit" Type = "Submit" Name = "isNotDone" Value = "Mark as unfinished.">
		<?php
		if (isset($_POST['isDone'])){
			mysql_query("UPDATE Progress SET 9c1 = 2 WHERE student_number = '$student_number'");
			echo '<script type="text/javascript"> window.location = "index.php" </script>';
		}
		if (isset($_POST['isNotDone'])){
			mysql_query("UPDATE Progress SET 9c1 = 1 WHERE student_number = '$student_number'");
			echo '<script type="text/javascript"> window.location = "index.php" </script>';
		}
		?>
	</form>

	<?php

    

?>

</body>

</html>