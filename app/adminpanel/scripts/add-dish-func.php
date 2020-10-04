<?php
require_once('../../dbconnect.php');
if (isset($_POST['submit'])) {

$name = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['name']);
$details = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['details']);
$price = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['price']);
$type = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['type']);
$image = basename( $_FILES["image"]["name"]);
$category = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['category']);


$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if (mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO dishes(name,details,price,type,image,category) VALUES ('$name','$details','$price','$type','$image','$category')")) {
  header("location: ../add-dish.php?msg=1");
}
else {
  header("location: ../add-dish.php?msg=2");
}

}
 ?>
