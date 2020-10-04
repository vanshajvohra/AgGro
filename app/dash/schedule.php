<?php 
session_start();
if (isset($_SESSION['username'])) {
	$uname = $_SESSION['username'];
}
else {
	header("location: index.php");
}

require_once('../dbconnect.php');
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
		<h1>GROUP ORDER SCHEDULE</h1>
		<form method="post" action="schedule-dt.php">
        <input class="input" type="number" id="no_of_orders" onkeyup="newSchedule(this)" name="no-of-orders" placeholder="Enter no. of orders per week"><br>
        <div id="day-inputs"></div>
		<input class="input-submit" type="submit" name="submit" value="SUBMIT">
		</form>
	<div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>