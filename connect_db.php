<?php
#2015-04-13: updated for new MySQL server


$rot = 'cbegsbyvbqopbaarpg95';



$user = "lozogx12_db";

$obfuscate = str_rot13($rot);

$db = "lozogx12_portfoliopro";



//Connect to the database

$connection = mysqli_connect("localhost", $user, $obfuscate, $db);



//Display an error message if the connection fails

if (!$connection)

{

	die('Could not connect: ' . mysql_error());

}



// connect to the sql543560 database in the server

	#mysql_select_db("sql543560", $connection);



?>