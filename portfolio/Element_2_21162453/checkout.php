<?php
session_start();

	include("include/connect.php");

if (isset($_REQUEST["btnLogout"]))
	{
	 	unset($_SESSION["myusername"]);
	 	unset($_SESSION["basket"]);
		$_SESSION["basket"] = array();
	 	header("location:index.php");

	}



if(isset($_SESSION["myusername"]))
	{
		$myusername = $_SESSION["myusername"];
		$mypassword=$_SESSION["mypassword"];

	}




if(isset($_SESSION["basket"]))
	{
		$basket = $_SESSION["basket"];
		$qty_sum = 0;
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
<title>Gadget Zone - Checkout</title>




<script type="text/javascript">

var

card_name =		/^[a-zA-Z\s]*$/;
cardType =		document.frmBank.cardType




function checkBankDetails()



{

 	if	(frmBank.cardType.selectedIndex == 0)
 		{
			alert("You must select a card.");
			return false;
 		}

 	if	(frmBank.cardType.selectedIndex == 1)
 		{
			var cardNumber = /^4[0-9]{12}(?:[0-9]{3})?$/;
 		}

  	if	(frmBank.cardType.selectedIndex == 2)
  		{
 			var cardNumber = /^5[1-5][0-9]{14}$/;
 		}

  	if	(frmBank.cardType.selectedIndex == 3)
  		{
 			var cardNumber = /^3[47][0-9]{13}$/;
 		}





	if	((document.getElementById("card_name").value).length == 0)
		{
                document.getElementById("card_name").focus();
                alert("Please enter your name.");
                return false;
        }

	if (!card_name.test(frmBank.card_name.value))
		{
			alert("Incorrect characters were used. Please try again.");
			return false;
		}



	if	((document.getElementById("cardNumber").value).length == 0)
		{
                document.getElementById("cardNumber").focus();
                alert("Please enter a card number.");
                return false;
        }

	if (!cardNumber.test(frmBank.cardNumber.value))
		{
			alert("Incorrect card number. Please try again.");
			return false;
		}


var securityNumber =	/^[0-9]{3}$/;

	if	((document.getElementById("securityNumber").value).length == 0)
		{
                document.getElementById("securityNumber").focus();
                alert("Please enter a security number (last three digits from the back of Your card).");
                return false;
        }

	if (!securityNumber.test(frmBank.securityNumber.value))
		{
			alert("Incorrect security number. Please try again.");
			return false;
		}

}



</script>







<!--
	if		(frmBank.cardType.selectedIndex == 1 && !cardNumber.match(/^4[0-9]{12}(?:[0-9]{3})?$/))

			{
                document.getElementById("cardNumber").focus();
				alert("Please enter a valid Visa card number.");
				return false ;
			}

	if		(frmBank.cardType.selectedIndex == 2 && !cardNumber.match(/^5[1-5][0-9]{14}$ /))

			{
                document.getElementById("cardNumber").focus();
				alert("Please enter a valid Master Card card number.");
				return false ;
			}

	if		(frmBank.cardType.selectedIndex == 3 && !cardNumber.match(/^3[47][0-9]{13}$/))

			{
                document.getElementById("cardNumber").focus();
				alert("Please enter a valid American Express card number.");
				return false ;
			}
-->



<!--
	if	((document.getElementById("securityNumber").value).length == 0)
		{
                document.getElementById("securityNumber").focus();
                alert("Please enter the security number printed at the back of your card.");
                return false;
        }

	if (!securityNumber.test(frmBank.securityNumber.value))
		{
			alert("Please enter the three digits number from the back of your card.");
			return false;
		}




	if (cardType.value == '0')
		{
			alert("You must select a card.");
			return false;
		}



















	if	((document.getElementById("securityNumber").value).length == 0)
		{
                document.getElementById("securityNumber").focus();
                alert("Please enter the security number printed at the back of your card.");
                return false;
        }



	if	(document.frmBank.cardType.value == "visa" )
	   	{
	     	alert( "Please provide your country!" );
	     	return false;
	   	}
	elseif	(document.frmBank.cardType.value == "master" )
	   	{
	     	alert( "Please provide your country!" );
	     	return false;
	   	}
	elseif	(document.frmBank.cardType.value == "american" )
	   	{
	     	alert( "Please provide your country!" );
	     	return false;
	   	}

   return( true );


}



</script>
-->



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


	<h1>Your Order Summary</h1>

	<br>



<div id="personal_info">

	<br><h2>Personal Details</h2><br>

	<table id="personal_details">
	<tbody>
		  <tr>
			<th><h2>Name</h2></th>
			<th><h2>Address</h2></th>
			<th><h2>E-mail</h2></th>
			<th><h2>Phone</h2></th>
		  </tr>



	<?php

		$sql="SELECT * FROM customer WHERE username='$myusername' and password='$mypassword'";
		$result=mysql_query($sql);

		$row = mysql_fetch_row($result);
		//while statement for loop
		while ($row != null)
		{

		$id = $row[0];
		$username = $row[1];
		$first_name = $row[2];
		$last_name = $row[3];
		$house_no = $row[4];
		$street = $row[5];
		$postcode = $row [6];
		$email = $row [7];
		$phone = $row [8];

		echo
			"
				<tr>
					<td><h4>$first_name $last_name</h4></td>
					<td><h4>$house_no $street, $postcode</h4></td>
					<td><h4>$email</h4></td>
					<td><h4>$phone</h4></td>
				</tr>
			\n";

		$row = mysql_fetch_row($result);
		}

	?>


	</tbody>
	</table>

</div>





<div id="checkout_form">

<br>

<h2>Order Details</h2>

	<br>


		<form action="thanks.php">
		<table id="checkout_table" width="100%">

		<tbody>
		  <tr>
			<th><h2>Id</h2></th>
			<th><h2>Name</h2></th>
			<th><h2>Quantity</h2></th>
			<th><h2>Price</h2></th>
			<th><h2>Cost</h2></th>
		  </tr>


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

				echo
					"<tr>
						<td><h4>$id</h4></td>
						<td><h4>$name</h4></td>
						<td><h4>$qty</h4></td>
						<td><h4>&pound$price</h4></td>
						<td><h4>&pound$cost</h4>
						<input type=\"hidden\" name=\"index\" value=\"$index\"></td>
					</tr>\n";
					$index++;

				}


				echo
				"<tr>
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
				</tr>\n";


				echo
				"<tr>
					<td>&nbsp;</td>
					<td><h4>Items: $qty_sum</h4></td>
					<td><h4>Total</h4></td>
					<td><h4>&pound$total</h4></td>
				</tr>\n";

		?>

		</tbody>
		</table>
		</form>

		<br>
		<br>

</div>




<div id="bank_info">

<h2>Payment</h2>

<table id="bank_details" align="center" cellspacing="1">

<tr>
<td><form name="frmBank" method="post" onSubmit="return checkBankDetails()" action="thanks.php">
<table width="100%" cellspacing="1" cellpadding="3">

<tr>
<td><h4>&nbsp;</h4></td>
</tr>

<tr>
<td><h4>Card Type</h4></td>
<td>
	<select name="cardType">
			<option value="0">(Select card)</option>
			<option value="1">Visa</option>
			<option value="2">Master Card</option>
			<option value="3">American Express</option>
	</select>
</td>
</tr>

<tr>
<td><h4>Name (as printed on the card)</h4></td>
<td><input name="card_name" type="text" id="card_name" size="20"></td>
</tr>

<tr>
<td><h4>Card Number</h4></td>
<td><input name="cardNumber" type="text" id="cardNumber" maxlength="16" size="20"></td>
</tr>

<tr>
<td><h4>Valid Until</h4></td>
	<td>

	<select class="valid_until">
			<option value="1">01</option>
			<option value="2">02</option>
			<option value="3">03</option>
			<option value="4">04</option>
			<option value="5">05</option>
			<option value="6">06</option>
			<option value="7">07</option>
			<option value="8">08</option>
			<option value="9">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
	</select>

	<select class="valid_until">
				<option value="0">2013</option>
				<option value="1">2014</option>
				<option value="2">2015</option>
				<option value="3">2015</option>
				<option value="4">2016</option>
				<option value="5">2017</option>
				<option value="6">2018</option>
				<option value="7">2019</option>
				<option value="8">2020</option>
	</select>

	</td>
</tr>

<tr>
<td><h4>Security Number</h4></td>
<td><input name="securityNumber" type="text" id="securityNumber" maxlength="3" size="3"></td>
</tr>

<tr>
<td colspan="3" align="center"><input type="submit" class="buttons" name="btnBankDetails" value="Submit">
<input type="reset" class="buttons" name="btnClear" value="Reset"></input></td>
</tr>

</table>
</form>

</td>
</tr>

</table>

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
