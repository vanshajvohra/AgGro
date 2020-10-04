<?php 
session_start();
require_once('../dbconnect.php');
if (isset($_POST['submit'])) {

	$name = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['group-name']);
    $email = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['invite-email']);
    $all_emails = $_SESSION['email'] . ", " . $email;
    $group_id = mt_rand(10000000,99999999);
	
if(mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO order_groups(group_id,group_name,group_member_emails) VALUES('$group_id','$name','$all_emails')")) {
    header("location: index.php?msg=1");
}
else{
echo "error " . mysqli_error($GLOBALS["___mysqli_ston"]);  
 }
}

 ?>