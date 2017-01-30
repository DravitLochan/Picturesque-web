<?php
$hostname = "localhost";
$username = "root";
$password = "";
 
//attempt to connect to mysql and storing the boolean result into con variable
$con = mysql_connect($hostname, $username, $password) ;
if (!$con)
{ 
	die('site under maintanance');
}


//connection to the database
$dbName="tribune";
$db = @mysql_select_db($dbName,$con) or die(mysql_error());


?>