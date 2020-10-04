<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: ../index.php");
exit();
}
else {
echo "";
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>AgGro</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <html>
<head>
	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://sayamkanwar.com/lib/js/sweetalert.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://sayamkanwar.com/lib/css/sweetalert.css">


	<script type="text/javascript" src = "js/jquery.min.js"></script>
			<script type="text/javascript" src = "js/index.js"></script>

</head>
<body>
<div class="wrapper">
<div class= "left-wrapper">

	<div class= "left-header">
		<div class = "filters">
			<ul class= "filter-list">
				<li id = "filter-all" class="filter-item"><a class="filter filter-selected">All</a></li>
				<li id = "filter-food" class="filter-item"><a class="filter">Food</a></li>
				<li id = "filter-dairy" class="filter-item"><a class="filter">Dairy</a></li>
				<li id = "filter-meat" class="filter-item"><a class="filter">Meat</a></li>
				<li id = "filter-vegetables" class="filter-item"><a class="filter">Vegetables</a></li>
				<li id = "filter-fruits" class="filter-item"><a class="filter">Fruits</a></li>
				<li id = "filter-drinks" class="filter-item"><a class="filter">Drinks</a></li>
				<li id = "filter-others" class="filter-item"><a class="filter">Others</a></li>
			</ul>

		</div>


	</div>
	<div class = "left-grid">
<div class = "grid-wrapper"></div>
	</div>

</div>
<div class="right-wrapper">
	<div class = "right-top">
		<center>
		<input type="text" class="right-searchbox" placeholder= "Search" onclick="this.placeholder=''" onblur="this.placeholder='Search'">
	</center>
	</div>
	<div class= "heading"><center>your cart</center></div>
	<br>
	<div class = "right-dishes-wrapper">
		<form action="#" method="post">
		<center>
			<div class="dish-container">
		<table style="width: 90%;" class="dish-table">
     <!-- <tr class="dish-row">
      <td class="dish-name">Pasta Arabiata</td>
			<input type="hidden" value="Pasta Arabiata" name="dishname"> 
			<td style="margin-left: 100px;"><input class="dish-quantity" type="text" name="dishquantity" value="1"></td> 
			<td class="dish-price" style="width:80px;">$500</td>
			<td class="remove" style="margin-left: 10px;">x</td>
     </tr> -->
      

		</table>
		</div>
		<div class="total-head">Total: </div>	<div class="total-price">$0</div>

		<input type="submit" name="submit" class="dish-sub" value="Save Cart">
		<!-- <input type="submit" name="submit" class="dish-sub" value="Order Now"> -->
		<input type="submit" name="dash" class="dish-sub2" value="Go to Dashboard">
		<!-- <div class="dish-sub2">Go to Dashboard</div> -->
	</center>
		</form>
		<!-- <div class= "dish-wrapper"><div class = "dish-name">Pasta Arabiata</div><input type="text" class="dish-quantity" value="1"><div class="dish-price">&#8377;&nbsp; 500</div></div> -->


	</div>
</div>


</div>
<div class = "upper-wrapper">
	Loader Here
	<!-- <div class = "upper-box"></div> -->
</div>

</body>
</html>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
