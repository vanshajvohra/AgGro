<?php 
require_once('functions.php');
$month = date("m");
$year = date("y")+10;

$stamp = $month . "/" . $year;


$cvv = genNo(3);

$card = genNo(16);
$cardno = chunk_split($card, 4, ' ');

echo $stamp;
 ?>