<?php



//Connect to the SciTechPort database

include("connect_db.php");



// connect to the scitechport database in the server

//mysql_select_db("scitechport", $con);



?>



<html>

<head>

	

	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

	

</head>

<body>
<h2>Now editing: At least one unique item about your SciTech experiences that shows evidence of growth from the previous grade. Include a completed reflection(s).</h2>
	<form method="post">

			<?php

			

	$student_number = $_COOKIE['ID_my_site'];

			

    if (isset($_POST['editor']))

    {

        $editor_data = $_POST['editor'];

        

        $myFile = "users/" . $student_number . "/11/11d1.html";

        $fh     = fopen($myFile, 'w');

		$editor_data2 = stripslashes($editor_data);

        fwrite($fh, $editor_data2);

        fclose($fh);

    }

    

    

    $myFile = "users/" . $student_number . "/11/11d1.html";

    $fh = fopen($myFile, 'r');

    $fs = filesize($myFile);

	//progress information for each individual file

    $progress_data = mysqli_query($connection, "SELECT * FROM Progress WHERE student_number = '$student_number'");

    //If the file is blank, it displays default text in the editor, otherwise it displays the data from the file

	//Also, "not worked on" is set in the database

    if ($fs == 0)

    {

        $data = "Click here to begin!";

		

		mysqli_query($connection, "UPDATE Progress SET 11d1 = 0 WHERE student_number = '$student_number'");

    }

    else

    {

		$data = fread($fh, filesize($myFile));

		//mysqli_query($connection, "UPDATE Progress SET 11d1 = 1 WHERE student_number = '$student_number'");

        

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
		<Input ID = "nochange" Type = "Submit" Name = "noChange" Value = "Go back.">
		<?php
		if (isset($_POST['isDone'])){
			mysqli_query($connection, "UPDATE Progress SET 11d1 = 2 WHERE student_number = '$student_number'");
			echo '<script type="text/javascript"> window.location = "index.php" </script>';
		}
		if (isset($_POST['isNotDone'])){
			mysqli_query($connection, "UPDATE Progress SET 11d1 = 1 WHERE student_number = '$student_number'");
			echo '<script type="text/javascript"> window.location = "index.php" </script>';
		}
		if (isset($_POST['noChange'])){
			echo '<script type="text/javascript"> window.location = "index.php" </script>';
		}
		?>
	</form>

	<?php

    

?>

</body>

</html>