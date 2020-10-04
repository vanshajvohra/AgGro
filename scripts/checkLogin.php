<?php
require_once('../app/dbconnect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `members` WHERE username='$username' and password='$password'";

$result = mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$row = mysqli_fetch_assoc($result);
$user_email = $row['email'];

$count = mysqli_num_rows($result);

if ($count == 1){
session_start();
$_SESSION['username'] = $username;
$_SESSION['email'] = $user_email;
header("location: ../app/dash/index.php");
}

else{
    header("location: ../index.php?msg=1");
}

}

?>
