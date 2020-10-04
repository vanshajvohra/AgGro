<?php
require_once('../../dbconnect.php');

if($_POST['key'] == "iloveAgGro") {
header("location: ../admin.php");
}
else {
header("location: ../index.php");
}
?>