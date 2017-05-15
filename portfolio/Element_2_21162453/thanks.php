<?php
session_start();

	include("include/connect.php");



	 	unset($_SESSION["basket"]);
		$_SESSION["basket"] = array();






if(isset($_SESSION["myusername"]))
	{
		$myusername = $_SESSION["myusername"];
	}



		if (!isset($_SESSION["basket"]))
			{
				$_SESSION["basket"] = array();
			}

		$basket = $_SESSION["basket"];
		$qty_sum = 0;



?>

<!DOCTYPE html>

<html>

<head>


<meta name="keywords" content="gadgets.gadgets shop. gadgets online. gadgets internet">
<meta name="description" content="This is the internet shop website">
<meta name="Author" content="Piotr Furmanek">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">



<link rel="stylesheet" href="style.css" type="text/css" />

<link rel="shortcut icon" href="images/tab.jpg" type="image/x-icon" />
<title>Gadget Zone - Thanks</title>


</head>

<body>


<div id="container">



<header>

<p id="logo"><a href="index.php" target="_self"><img src="images/logo.png" height="150" width="450"></a></p>
<p id="logo_left"><a href="index.php" target="_self"><img src="images/logo_left.jpg" height="150" width="150"></a></p>
<p id="logo_right"><a href="index.php" target="_self"><img src="images/logo_right.jpg" height="150" width="150"></a></p>

</header>



<div class="stripe"></div>







<div class="navigation">

<nav>
    <div class="menu-item alpha">
      <h4><a href="index.php">Home</a></h4>
      <p>Welcome to Gadget Zone</p>
    </div>

    <div class="menu-item">
      <h4><a href="all_gadgets.php">Products</a></h4>
      <ul>
        <li><a href="desktop.php">Desktop & USB</a></li>
        <li><a href="lifestyle.php">Lifestyle Gadgets</a></li>
        <li><a href="toys_games.php">Toys & Games</a></li>

      </ul>
    </div>

    <div class="menu-item">
      <h4><a href="#">Shop</a></h4>
      <ul>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Log in</a></li>
        <li><a href="basket.php">View Basket</a></li>
      </ul>
    </div>

 </nav>

</div>




<!----------------------------------------------------------- MIDDLE SECTION START -------------------------------------------------------------->


<section class="middle">


	<h1>Thank You!</h1>

	<br>
	<br>
	<br>

	<h2>Your payment has been accepted.</h2>

	<br>

	<h3>Your gadgets should arrive to You in between 3 to 5 working days.</h3>

	<br>

	<h3>ENJOY</h3>

	<form action="index.php">
		<h1><input type="submit" class="buttons" name="btnBackHome" value="Back Home"/></h1>
	</form>

	<br>
	<br>

</section>

<!------------------------------------------------------------ MIDDLE SECTION END --------------------------------------------------------------->



<!---------------------------------------------------------- RIGHT SIDE PANEL START ------------------------------------------------------------->

<aside class="right">



</aside>

<!----------------------------------------------------------- RIGHT SIDE PANEL END -------------------------------------------------------------->





<footer>
<div id="copyright">Copyright by Piotr Furmanek</div>
</footer>





</div>
</body>
</html>
