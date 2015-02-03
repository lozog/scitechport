<?php
#2014-06-12: updated for new MySQL server


$rot = 'Reebepbqr37';





$obfuscate = str_rot13($rot);



//Connect to the sql543560 database

$con = mysql_connect("sql5.freesqldatabase.com", "sql543560", "aG5%fB3%");



//Display an error message if the connection fails

if (!$con)

{

	die('Could not connect: ' . mysql_error());

}



// connect to the sql543560 database in the server

	mysql_select_db("sql543560", $con);



?>