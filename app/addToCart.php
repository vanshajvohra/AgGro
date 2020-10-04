<?php
require_once('dbconnect.php');
session_start();
$uname = $_SESSION['username'];
$cart_id = mt_rand(10000,99999);
$products_array = $_POST['products_array'];
// $quantity = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['quantity']);
// $price = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['price']);

if (mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO cart(cart_id,cart_owner,products) VALUES ('$cart_id','$uname','$products_array')")) {
  echo 1;
}
else {
  echo 0;
}

 ?>
