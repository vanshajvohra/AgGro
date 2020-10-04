<?php 
session_start();
if (isset($_SESSION['username'])) {
	$uname = $_SESSION['username'];
}
else {
	header("location: index.php");
}

require_once('../dbconnect.php');
$sql = "SELECT * FROM user_details WHERE email='$email'";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
	$name = $row['name'];
	$image = $row['image'];
}
$pic = "uploads/" . $image;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="lib.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="container col-flex-full">
	<div class="user">
			<!-- <div class="photo" style="background: url('<?php echo $pic; ?>')"></div> -->
			<a href="index.php"><div class="logo"><img src="logo.png"></div></a>
			<div class="utext"><?php echo $uname; ?></div>
			<a href="../cart.php"><div class="utext2">cart</div></a>
			<a href="logout.php"><div class="utext2">logout</div></a>
		</div>
	<div class="create-group">
		<h1>BILLING DETAILS</h1>
		<!-- <form method="post" action="create-group-action.php">
		<input class="input" type="text" name="group-name" placeholder="Enter group name"><br>
		<input class="input long-input" type="text" name="invite-email" placeholder="Enter email IDs of people you would like to invite separated with commas (,)"><br>
		<input class="input-submit" type="submit" name="submit" value="SUBMIT">
        </form> -->
		<div class="boxes cflex">
			<div class="box b1_2 col-cflex"><img src="visa-card.png"/>
                <div>**** **** **** 4501</div>
                <div style="display:inline-block;">
                <div class="act-btn">Edit</div>
                <div class="act-btn">Delete</div>
                </div>
            </div>
			<div class="box b2_2 col-cflex"><img src="https://img.icons8.com/ios/150/000000/bank-cards--v1.png"/>
                <div>Add New Payment Method</div>
            </div>
</div>
	<div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>