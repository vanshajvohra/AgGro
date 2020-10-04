<?php 
	require_once('functions.php');
	require_once('dbconnect.php');
	session_start();
	$amount = $_POST['amount'];
	$accountno = $_POST['accountno'];
	$password = encStr($_POST['password']);
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM user_details WHERE email='$email'";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$name = $row['name'];
		$pass = $row['password'];
	}
	$query="SELECT * FROM bank_account WHERE name='$name'";
	while ($row = mysql_fetch_assoc(mysql_query($query))) {
		$balance = $row['balance'];
		$acc = $row['accountno'];
	}

if ($password == $pass) {
		
	if ($amount>=$balance) {
		$sql = "SELECT * FROM bank_account WHERE accountno='$accountno'";
	while ($row = mysql_fetch_assoc(mysql_query($query))) {
		$balance2 = $row['balance'];
	}
	$upbal = $balance2+$amount;
	$query = "UPDATE bank_account SET balance='$upbal' WHERE accountno='$accountno'";
	mysql_query($query);

	$sql = "SELECT * FROM bank_account WHERE accountno='$acc'";
	while ($row = mysql_fetch_assoc(mysql_query($query))) {
		$balance3 = $row['balance'];
	}
	$downbal = $balance3-$amount;
	$query = "UPDATE bank_account SET balance='$downbal' WHERE accountno='$acc'";
	mysql_query($query);
	echo 1;
	}


	else {
		//error insufficient funds
		echo 0;
	}
}
else {
	echo 2;
	//error incorrect password
}
?>	