<?php
require_once('../../dbconnect.php');

$query = "SELECT * FROM dishes";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);

if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}
	$arr = array();
	$i=0;
while ($row = mysqli_fetch_assoc($result)) {

   $arr[$i]=$row;$i++;
}
// echo json_encode($arr);

// $arr = array("element1","element2",array("element31","element32"));
//$arr['name'] = "response";
echo $_GET['callback']."(".json_encode($arr).");";




 ?>
