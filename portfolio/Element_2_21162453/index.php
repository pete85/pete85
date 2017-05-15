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
<title>Gadget Zone - Home</title>








<script src="scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery.cycle.all.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function(){
	$('#myslides').cycle({
		fit: 1, pause: 2
	});
	});
</script>








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


	<h1>Welcome to Gadget Zone</h1>



		<div id="slideshow">

			<div id="myslides">

				<?php
					$directory = 'images/gadgets/';

					try
					{
						foreach ( new DirectoryIterator($directory) as $item )
						{
							if ($item->isFile())
							{
								$path = $directory . "/" . $item;
								echo "<img src=\"" . $path . "\" />";
							}
						}

					}
					catch(Exception $e)
					{
						echo 'No images found.<br />';
					}
				?>

			</div>

		</div>


		<br>
		<br>
	<div id="about">
		<p>	We had a bright idea a while ago and The Gadget Zone was born! We realised that there was a real lack of cool things on
			the internet - the sort of stuff that we all want - that led us to set up our store and provide the best prices for our
			products.</p>

      	<p>	Our choice includes boy's toys, gadgets, remote control cars, and remote control helicopters. We also range lifestyle
      		accessories such as, led touch pen or smart baby monitor.</p>

      	<p>	We have a focus on innovative gifts and gadgets and try to source affordable gifts for men and women. So from a newtons
      		cradle to great gifts ideas for men, women and kids, we are focussed on delivering gifts to you nice and quick!</p>
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
