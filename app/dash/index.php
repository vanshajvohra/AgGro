<?php 
session_start();
if (isset($_SESSION['username'])) {
	$uname = $_SESSION['username'];
}
else {
	header("location: ../../index.php");
}

require_once('../dbconnect.php');
// $query = "SELECT * FROM vcc WHERE name='$uname'";
// $result = mysql_query($query);
// while ($row = mysql_fetch_assoc($result)) {
// 	$expiry = $row['expiry'];
// 	$cvv = $row['cvv'];
// 	$cardno = $row['cardno'];
// }

// $query2 = "SELECT * FROM bank_account WHERE name='$uname'";
// $result2 = mysql_query($query2);
// while ($row = mysql_fetch_assoc($result2)) {
// 	$accountno = $row['accountno'];
// 	$balance = $row['balance'];
// }
// $pic = "uploads/" . $image;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="lib.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/mikeflynn/egg.js/master/egg.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="container col-flex-full">
		<div class="user">
			<!-- <div class="photo" style="background: url('<?php echo $pic; ?>')"></div> -->
			<div class="logo"><img src="logo.png"></div>
			<div class="utext"><?php echo $uname; ?></div>
			<a href="../cart.php"><div class="utext2">cart</div></a>
			<a href="logout.php"><div class="utext2">logout</div></a>
		</div>
			<div class="back back2">BACK</div>
		<div class="heading col-cflex">
			<div class="mainhead">DASHBOARD</div>
		</div>

		<div class="boxes cflex">
			<div class="box b1 col-cflex"><img src="https://img.icons8.com/ios/96/000000/user-group-man-man.png"/>
				<div class="bold">GROUPS</div>
			</div>
			<div class="box b2 col-cflex">
			<img src="https://img.icons8.com/ios/96/000000/bill.png"/>

				<div class="bold">BILLING DETAILS</div>
			</div>
			<div class="box b3 col-cflex"><img src="https://img.icons8.com/ios/96/000000/online-store.png"/>
				<div class="bold">STORE</div>
			</div>
			<div class="box b4 col-cflex"><img src="https://img.icons8.com/ios/96/000000/overtime.png"/>
	<div class="bold">SCHEDULE</div>
			</div>
		</div>

		<div class="anidiv"></div>
		<div class="condiv1 col-cflex">
			<div class="vform col-cflex">
				<div class="head col-cflex">
				<div class="back back1">&larr; BACK</div>
					<div class="mainhead main2">GROUPS</div>
					<div class="subhead sub2">Invite people to your group.</div>
				</div>
				<div class="form col-cflex">
					<!-- <div class="name name1">
						<div class="ntext ntext1 animated ">Hey, <?php echo $uname; ?></div>
					</div>  -->
					<div class="aform cflex">
						<form>
							<div class="giveh">
								<div class="move m1 cflex animated ">
								<?php
								$query = "SELECT * FROM order_groups WHERE group_member_emails LIKE '%".$_SESSION['email']."%'";
								$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
								$count = mysqli_num_rows($result);
								if($count>0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo "<div class='group-box'><p>{$row['group_name']}</p></div>";
									}
								}
								else {
									echo "<p>You don't have any groups.</p>";
								}
								?>
								</div>
							</div>
						</form>
					</div>
					<button class="next n1 animated">Create New Group</button>
				</div>
			</div>
		</div>
		<div class="condiv2 col-cflex">
			<div class="vform vform2 col-cflex">
				<div class="head col-cflex">
				<div class="back back2">&larr; BACK</div>
					<div class="mainhead main3">PAY YOUR BILLS AND TAXES</div>
					<div class="subhead sub3">Lorem ipsum dolor sit amet adipisicing elit.</div>
				</div>
				<div class="form  form2 col-cflex">
					<div class="paybills animated">
						<div class="pback cflex">
							<div class="bills">Bills</div>
							<div class="tax">Taxes</div>
							<div class="green"></div>
						</div>
					</div>
					<div class="name name2">
						<div class="ntext ntext2 animated ">Hey, <?php echo $uname; ?></div>
					</div> 
					<div class="aform cflex">
						<form>
							<div class="giveh">
								<div class="move m3 animated cflex">
									<input type="" name="" placeholder="Current Location"> <input type="" name="" placeholder="Visa Type">
								</div>
								<div class="move m4 animated cflex">
									<input type="" name="" placeholder="Current Location"> <input type="" name="" placeholder="Visa Type">
								</div>
							</div>
						</form>
					</div>
					<button class="next n2 animated">Next </button>
				</div>
			</div>
		</div>

		<div class="condiv3 col-cflex">
			<div class="head head3 col-cflex">
			<div class="back back3">&larr; BACK</div>
				<div class="mainhead main4">MANAGE YOUR BANK</div>
				<div class="subhead sub4">Lorem ipsum dolor sit amet adipisicing elit.</div>
			</div>
			<div class="bankcards animated perfull-cflex">
				<div class="cards card1 col-cflex">
					<div class="whit cflex"><img src="credit.png" class="x"></div>
					<div class="tex t2">E-CREDIT CARD</div>
				</div>
				<div class="cards card2 col-cflex">
					<div class="whit cflex"><img src="money.png" class="x"></div>
					<div class="tex t2">TRANSFER MONEY</div>
				</div>
				<div class="cards card3 col-cflex">
					<div class="whit cflex"><img src="password.png" class="x"></div>
					<div class="tex t2">CHANGE PASSWORD</div>
				</div>
				<div class="cards card4 col-cflex">
					<div class="whit cflex"><img src="user.png" class="x"></div>
					<div class="tex t2">YOUR DATA</div>
				</div>
			</div>
			<div class="pages full">
				<div class="page page1 col-cflex">
					<div class="mainhead main5 animated">YOUR VIRTUAL CREDIT CARD</div>
					<div class="visa animated">
						<div class="h">VISA</div>
						<div class="right cflex">
							<input type="hidden" id="hid-cvv" value="<?php echo $cvv; ?>">
							<span class="cvv-no">&bull;&bull;&bull;</span>
						</div>
						<div class="numbers"><?php echo $cardno; ?></div>
						<div class="holder">
							Card Holder<br>
							<span><?php echo strtoupper($uname); ?></span>
						</div>

						<div class="expiry">
							Valid Thru<br>
							<span><?php echo $expiry; ?></span>
						</div>
					</div>

					<div class="show animated">
						Click To Show CVV 
					</div>
					<div class="backup backup1 animated"><img src="cross.png"></div>
				</div>
				<div class="page page2 col-cflex">
					<div class="up col-cflex">
						<div class="mainhead main6 animated">TRANSFER MONEY</div>
						<form id="transfer-sub" class="for for1 col-cflex animated" method="post">
							<div class="mar">
								<input type="number" name="amount" id="amount"  placeholder="Amount">
								<input type="text" name="accountno" id="accountno" placeholder="Account Number">
							</div>
							<input type="password" name="pass" id="pass" placeholder="Password">
							<input type="submit" name="submit" class="next n3 animated">
						</form>
						<div class="backup backup2 animated"><img src="cross.png"></div>
					</div>
				</div>
				<div class="page page3">
					<div class="up2 col-cflex">
						<div class="mainhead main7 mai animated">CHANGE PASSWORD</div>
						<form class="for for2 col-cflex animated">
							<div class="mar">
								<input type="password" name="" placeholder="Old Password">
								<input type="password" name="" placeholder="New Password">
							</div>
							<button class="next n4 animated">Submit</button>
						</form>
						<div class="backup backup3 animated"><img src="cross.png"></div>
					</div>
				</div>
				<div class="page page4">
						<div class="mainhead main8 mai animated cflex">PROFILE</div>
					<div class="up3 col-cflex">
						<div class="inc cflex">
							<div class="dabbe animated col-cflex">
								<div class="tex">CURRENT STATUS</div>
								<div class="tex">BALANCE <span class="norm"><?php echo $balance; ?></span></div>
								<div class="tex">ACCOUNT NUMBER<span class="norm"><?php echo $accountno; ?></span></div>
								<div class="cflex">
									<div class="card1 daba daba1">
										<div class="upnum">
											62.00
										</div>
										<div class="conv cur">INR</div>
										<div class="conv">20-07-18</div>
									</div>
									<div class="card2 daba daba2">
										<div class="upnum">
											20.00
										</div>
										<div class="conv cur">INR</div>
										<div class="conv">20-07-18</div>
									</div>
								</div>
								<div class="cflex">
									<div class="card3 daba daba3">
										<div class="upnum">
											12.00
										</div>
										<div class="conv cur">INR</div>
										<div class="conv">20-07-18</div>
									</div>
									<div class="card4 daba daba4">
										<div class="upnum">
											32.00
										</div>
										<div class="conv cur">INR</div>
										<div class="conv">20-07-18</div>
									</div>
								</div>
							</div>
							<div class="passbook animated col-cflex">
								<div class="tex">PASSBOOK</div>
								<div class="wid cflex animated">
									<div class="circle"></div>
									<div class="ltext">
										Outgoing
									</div>
								</div>

								<div class="wid cflex">
									<div class="circle"></div>
									<div class="ltext">
										Outgoing
									</div>
								</div>

								<div class="wid cflex animated">
									<div class="circle"></div>
									<div class="ltext">
										Incoming
									</div>
								</div>

								<div class="wid cflex animated">
									<div class="circle"></div>
									<div class="ltext">
										Outgoing
									</div>
								</div>
							</div>
						</div>
						<div class="backup backup4 animated"><img src="cross.png"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay">
		<center>
		<div class="box-chai">
			<a href="side quest.html"><img id="chai" src="tea.jpg"></a>
		</div>
		</center>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>