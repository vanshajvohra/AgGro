<?php 
session_start();
if (isset($_SESSION['username'])) {
	$uname = $_SESSION['username'];
}
else {
	header("location: ../index.php");
}

require_once('dbconnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="dash/lib.css">
	<link rel="stylesheet" type="text/css" href="dash/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dash/index.css">
</head>
<body>
	<div class="container col-flex-full">
	<div class="user">
			<!-- <div class="photo" style="background: url('<?php echo $pic; ?>')"></div> -->
			<a href="dash/index.php"><div class="logo"><img src="dash/logo.png"></div></a>
            <div class="utext"><?php echo $uname; ?></div>
            <a href="cart.php"><div class="utext2">cart</div></a>
			<a href="logout.php"><div class="utext2">logout</div></a>
		</div>
	<div class="create-group">
        <h1>YOUR CART</h1>
        <center>
        <?php
            $total=0;
            $query = "SELECT * FROM cart WHERE cart_owner='$uname'";
            $result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if($count>0) {
                $p_array = $row['products'];
                $p_array = json_decode($p_array);
                for ($i=0; $i<count($p_array); $i++) {
                    // echo $p_array[$i];
                    echo '
                    <div class="item-box">
                    <div class="item-info">
                        <h3>'.$p_array[$i]->name.'</h3>
                    </div>
                    <div class="item-quant">
                        <p>Quantity: '.$p_array[$i]->quantity.'</p>
                    </div>
                    <div class="item-price">
                        <p>'.$p_array[$i]->price.'</p>
                    </div>
                </div>';
                $total+=str_replace("$","",$p_array[$i]->price);
                }
            }
            else {
                echo "<p>You don't have any items in your cart.</p>";
            }
        ?>
        <!-- <div class="item-box">
            <div class="item-info">
                <h3>Oreo Family Pack</h3>
            </div>
            <div class="item-quant">
                <p>Quantity: 1</p>
            </div>
            <div class="item-price">
                <p>$12.45</p>
            </div>
        </div> -->
        </center>
        <h3 class="total-amount">Total: <?php echo "$". $total; ?></h3>
        <p class="order-statement">Your order will be placed automatically at the scheduled date and time. Feel free to make any changes to your cart till then.</p>
	<div>
	</div>
	<script type="text/javascript" src="dash/script.js"></script>
</body>
</html>