<?php
	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "aggro";

	ini_set('session.gc_maxlifetime', 3600*3);
	//Connect to DB.
	$dbhandle = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostname,  $username,  $password))
  		or die("Unable to connect to mysql");


  	$selected_db = mysqli_select_db($dbhandle, $database)
 		 or die("Could not select examples");

 		  error_reporting(0);

?>
