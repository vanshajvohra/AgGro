<?php 
session_start();
require_once('../app/dbconnect.php');
if (isset($_POST['submit'])) {

	$name = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['name']);
	$email = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['email']);
	$username = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['username']);
	$password = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['password']);
        $address = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['address']);
        $city = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['city']);
        $landmark = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['landmark']);
	

 if(mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO members(name,email,username,password,address,city,landmark) VALUES('$name','$email','$username','$password','$address','$city','$landmark')"))
 {
   ?>
    <script type="text/javascript">window.open("../index.php","_self")</script>
   <?php
 }
 else
 {
echo "error " . mysqli_error($GLOBALS["___mysqli_ston"]);  
 }
}

 ?>