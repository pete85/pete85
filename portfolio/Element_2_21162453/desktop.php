<?php
session_start();

	include("include/connect.php");

if (isset($_REQUEST["btnLogout"]))
	{
	 	unset($_SESSION["myusername"]);
	 	unset($_SESSION["basket"]);
		$_SESSION["basket"] = array();

	}




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
<title>Gadget Zone - Desktop & USB Gadgets</title>

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








<section class="middle">

<h1>Desktop & USB gadgets</h1>

		<div class="allGadgets">
			<?php
			$query = "SELECT * FROM products WHERE `category` = \"desktop_usb\"";
			$resultSet = mysql_query($query);
			//fetch a single row
			$row = mysql_fetch_row($resultSet);

			//while statement for loop
			while ($row != null)
				{
				$id = $row[0];
				$name = $row[1];
				$category = $row[2];
				$price = $row[3];
				$image = $row[5];


					echo
					"
						<figure>
							<h2>$name</h2>
							<a href=gadgets.php?id=$id><img type=\"image\" name=\"id\" src=\"images/gadgets/$image\" width=\"400\" height=\"400\" alt=\"$image\" /></a>
						</figure>\n			";


				$row = mysql_fetch_row($resultSet);
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
		  echo "<p>$date</p><br>";
		?>

	</div>

	<div id="items_number">


		<?php

		  $index = 0;
		  $total = 0;


				foreach($basket as $item)

					{
						$id = $item["id"];
						$name = $item["name"];
						$qty = $item["qty"];
						$price = $item["price"];
						$cost = $qty * $price;
						$total = $total + $cost;
						$qty_sum += $item["qty"];

					}

				echo
					"	<a href='basket.php'><p>Your basket:</p>
						<p>$qty_sum item(s)</p></a>		";

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