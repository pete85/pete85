<?php
session_start();

	include("include/connect.php");
	$myusername = $_SESSION["myusername"];

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
<title>Gadget Zone - Successful Login</title>



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

    <div class="menu-item">
      <h4><a href="#">Contact</a></h4>
      <ul>
        <li><a href="#">Phone</a></li>
        <li><a href="#">Email</a></li>
        <li><a href="#">Location</a></li>
      </ul>
    </div>
 </nav>

</div>






<section class="middle">



      <h2>Login Successful</h2>

      </br>

<?php
	if(!isset($_SESSION["myusername"]))
	{
	   echo "<h2>Welcome!</h2>";
	}
	else
	{
		echo "<h2>Welcome $myusername</h2>";
	}

?>



	<form name="frmBackHome" method="post" action="index.php">

		<p><input type="submit" name="btnBackHome" value="Go Back Home"></p>

	</form>


</section>








<aside class="right">


	<div class="navigation_2">

		<ul id="list-nav">
		  <li><a href="register.php">Sign Up</a></li>
		  <li><a href="login.php">Log In</a></li>
		</ul>

	</div>

	<div id="date">

      <?php
      $date = date('l F jS, Y');
      echo "<p>$date</p>";
      ?>

    </div>



	<div class="welcome">
		<?php

		if(!isset($_SESSION["myusername"]))
			{
			echo "<h4>Welcome!</h4>";
			$_SESSION['logged_in']= false ;
			}
		else
			{
			echo "<h2>Welcome $myusername</h2>";
			$_SESSION['logged_in']= true ;
			}

		?>
	</div>

<h2 id="aside_header">Our Products</h2>


<div id="gallery">




<?php


$query = "SELECT * FROM products";


$resultSet = mysql_query($query);

?>



<form onSubmit="return validateForm()" action="gadgets.php">



<table id="thumbnails_table">

<tbody>

	<?php

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


		echo
		"	<tr id=\"thumb_row\">
			<td><a href=gadgets.php?id=$id><img type=\"image\" name=\"id\" src=\"images/$image\" width=\"55\" height=\"55\" alt=\"$image\" /></a></td>
			</tr>\n			";


		$row = mysql_fetch_row($resultSet);
		}
		//data from database shown
		?>

	</tbody>
</table>


</form>


</div>


</aside>




<footer>
<div id="copyright">Copyright by Piotr Furmanek</div>
</footer>





</div>
</body>
</html>
