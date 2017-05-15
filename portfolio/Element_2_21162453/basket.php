<?php
session_start();

	include("include/connect.php");


		if (isset($_REQUEST["btnRemove"]))
			{
				$index = $_REQUEST['index'];
    			unset($_SESSION['basket'][$index]);
    			$_SESSION['basket'] = array_values($_SESSION['basket']);
    		}



if (isset($_REQUEST["btnLogout"]))
	{
	 	unset($_SESSION["myusername"]);
	 	unset($_SESSION["basket"]);
		$_SESSION["basket"] = array();
	 	header("location:index.php");

	}



		if (!isset($_SESSION["basket"]))
			{
				$_SESSION["basket"] = array();
			}

		$basket = $_SESSION["basket"];
		$qty_sum = 0;



		if(isset($_SESSION["myusername"]))
			{
				$myusername = $_SESSION["myusername"];
			}




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
<title>Gadget Zone - Basket</title>




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




      <h1>Basket</h1>




<!--		<form action="basket.php">  -->



		<table id="basket_table" width="100%">

		<tbody>
		  <tr>
			<th><h2>Id</h2></th>
			<th><h2>Name</h2></th>
			<th><h2>Quantity</h2></th>
			<th><h2>Price</h2></th>
			<th><h2>Cost</h2></th>
			<th><h2>&nbsp;</h2></th>
		  </tr>


		<?php


			$index = 0;
			$total = 0;

			foreach($basket as $item)

				{
		echo "<form action=\"basket.php\">";
					$id = $item["id"];
					$name = $item["name"];
					$qty = $item["qty"];
					$price = $item["price"];
					$cost = $qty * $price;
					$total = $total + $cost;
					$qty_sum += $item["qty"];

					echo
						"<tr>
							<td><h4>$id</h4></td>
							<td><h4>$name</h4></td>
							<td><h4>$qty</h4></td>
							<td><h4>&pound$price</h4></td>
							<td><h4>&pound$cost</h4></td>
							<td><input type=\"submit\" class=\"buttons\" name=\"btnRemove\" value=\"Remove\"></td>
							<td><input type=\"hidden\" name=\"index\" value=\"$index\"></td>
						</tr>\n";
						$index++;
		echo "</form>";
				}


				echo
				"<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>\n";

				echo
				"<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>\n";


				echo
				"<tr>
					<td>&nbsp;</td>
					<td><h4>Items: $qty_sum</h4></td>
					<td>&nbsp;</td>
					<td><h4>Total</h4></td>
					<td><h4>&pound$total</h4></td>
				</tr>\n";

		?>

		</tbody>
		</table>

		<br>
		<br>
		<br>
		<br>


	<div id="checkout">


			<?php

			if(isset($_SESSION["myusername"]))
				{
					echo "	<h5><form action=\"checkout.php\"><input type=\"submit\" class=\"buttons\" name=\"btnCheckout\" value=\"Proceed to checkout\"></form></h5>
							<h5><form action=\"index.php\"><input type=\"submit\" class=\"buttons\" name=\"btnBack\" value=\"Home\"></form></h5><br><br>\n";
				}
			else
				{
					echo "<br>";
					echo "<h4>Please <a href='login.php'>log in</a> or <a href='register.php'>sign up</a> to continue shopping.</h4><br>";
				}
			?>


	</div>


</section>

<!------------------------------------------------------------ MIDDLE SECTION END --------------------------------------------------------------->





<!---------------------------------------------------------- RIGHT SIDE PANEL START ------------------------------------------------------------->

<aside class="right">


	<div id="logging">

			<?php

			if(!isset($_SESSION["myusername"]))
				{
					echo 	"<h5><form action=\"register.php\"><input type=\"submit\" class=\"buttons\" name=\"btnSignup\" value=\"Sign Up\"></form>
								<form action=\"login.php\"><input type=\"submit\" class=\"buttons\" name=\"btnLogin\" value=\"Log In\"></form>
							</h5>\n";
				}
			else
				{
					echo "	<h5>Hi $myusername</h5>
							<h5><form><input type=\"submit\" class=\"buttons\" name=\"btnLogout\" value=\"Log Out\"></form></h5>";
				}
			?>

	</div>





	<div id="date">

      <?php
      $date = date('l F jS, Y');
      echo "<p>$date</p>";
      ?>

    </div>



<div id="aside_header">

<h2>Our Products</h2>

</div>


	<div id="gallery">


		<form onSubmit="return validateForm()" action="gadgets.php">
			<table id="thumbnails_table">
				<tbody>

				<?php

					$query = "SELECT * FROM products";
					$resultSet = mysql_query($query);
					$row = mysql_fetch_row($resultSet);

					//fetch a single row

					//while statement for loop
					while ($row != null)
					{
						$id = $row[0];
						$name = $row[1];
						$category = $row[2];
						$price = $row[3];
						$image = $row[5];


						echo "	<tr id=\"thumb_row\">
								<td><a href=gadgets.php?id=$id><img type=\"image\" name=\"id\" src=\"images/gadgets/$image\" width=\"55\" height=\"55\" alt=\"$image\" /></a></td>
								</tr>\n";


						$row = mysql_fetch_row($resultSet);
					}

				?>

				</tbody>
			</table>
		</form>


	</div>


</aside>

<!----------------------------------------------------------- RIGHT SIDE PANEL END -------------------------------------------------------------->




<footer>
<div id="copyright">Copyright by Piotr Furmanek</div>
</footer>





</div>
</body>
</html>