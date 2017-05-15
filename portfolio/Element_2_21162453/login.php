<?php
session_start();


	include("include/connect.php");


	if (isset($_REQUEST["btnLogout"]))
	{
	  session_destroy();
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
<title>Gadget Zone - Login</title>



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
        <li><a href="#">Log in</a></li>
        <li><a href="basket.php">View Basket</a></li>
      </ul>
    </div>
 </nav>

</div>




<!----------------------------------------------------------- MIDDLE SECTION START -------------------------------------------------------------->


<section class="middle">


	<div id="login_form">
			<table width="500" border="0" cellpadding="0" cellspacing="1">

		<tr>

			<form name="login_form" method="post" action="checklogin.php">
		<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1">
				<tr>
				<td colspan="3"><h1>Member Login </h1></td>
				</tr>
				<tr>
				<td><h3>Username</h3></td>
				<td><h3><input name="myusername" type="text" id="myusername"></h3></td>
				</tr>
				<tr>
				<td><h3>Password</h3></td>
				<td><h3><input name="mypassword" type="password" id="mypassword"></h3></td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" class="buttons" name="btnLogin" value="Login"></td>
				</tr>
			</table>
		</td>
			</form>

		</tr>

</table>
</div>

</section>











<!---------------------------------------------------------- RIGHT SIDE PANEL START ------------------------------------------------------------->

<aside class="right">



	<div id="date">

      <?php
      $date = date('l F jS, Y');
      echo "<p>$date</p>";
      ?>

    </div>




<h2 id="aside_header">Our Products</h2>


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


