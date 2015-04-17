<?php

$rot = 'Reebepbqr37';


$obfuscate = str_rot13($rot);

//Connect to the SciTechPort database
$con = mysql_connect("scitechport.db.7382521.hostedresource.com", "scitechport", $obfuscate);

//Display an error message if the connection fails
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

// connect to the scitechport database in the server
	mysql_select_db("scitechport", $con);

?>