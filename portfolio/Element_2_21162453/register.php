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
<title>Gadget Zone - Register</title>



<script type="text/javascript">
var
username = 		/^[a-zA-Z0-9_-]{3,16}$/;
first_name = 	/^[a-zA-Z]{2,}$/;
last_name = 	/^[a-zA-Z]{2,}$/;
house_no = 		/^\d+[a-zA-Z]*$/;
street = 		/^[a-zA-Z]{2,}\s[a-zA-Z]{2,}$/;
postcode = 		/^([a-zA-Z]){1}([0-9][0-9]|[0-9]|[a-zA-Z][0-9][a-zA-Z]|[a-zA-Z][0-9][0-9]|[a-zA-Z][0-9]){1}([ ])([0-9][a-zA-z][a-zA-z]){1}$/;
email = 		/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
phone = 		/^0(\d{10})$/;
password = 		/^[a-zA-Z0-9_-]{6,18}$/;
pass_con = 		/^[a-zA-Z0-9_-]{6,18}$/;


// 	variables declared for function called "checkThis"; Regular expressions used for validating
//	users input; Regular expressions explanation:
//		1. name
//				/ 				- used at the beginning and at the end of each regular expression RE;
//				^ 				- checking string at very beginning;
//				[a-zA-Z] 		- only letters can be used, both uppercase and lowercase are allowed;
//				{2,}			- Minimum two of the characters must be entered;
//				[a-zA-Z]{2,} 	- As above, minimum two of uppercase or lowercase letters;
//				$ 				- stop;
//		2. number
//				0				- string has to start with 0;
//				(\d(10))		- first character has to be followed by ten digits "\d"- group "()";
//		3. email
//				\w				- character from group A to Z, a to z or 0 to 9;
//				+ 				- previous character used one or more times;
//				[]				- only one of characters inside this bracket can be used;
//				[\.-]			- "." or "-" can be used, only one of these characters;
//				?				- zero or one of previous characters;
//				*				- one or more of previous items can be used, in this case "([\.-]?\w+)"
//								  represents item;
//				(\.\w{2,3})		- two or three ("{2,3}") of previous items ("\.\w");
//		4. street
//				[a-zA-Z] 		- only letters can be used, both uppercase and lowercase are allowed;
//				{2,}			- Minimum two of the characters must be entered;
//		5. house_no
//
//				^ 				- Must start with
//				\d+ 			- Any number (\d), at least once (+)
//				[a-zA-Z]* 		- Some letters [a-zA-Z] (optional: *)
//				$ 				- Must end here







function checkThis()


{

	if	((document.getElementById("username").value).length == 0)
		{
                document.getElementById("username").focus();
                alert("Please enter a Username.");
                return false;
        }

	if (!username.test(myForm.username.value))
		{
			alert("Please enter a valid Username - use letters, numbers, underscores or hyphens.");
			return false;
		}

	if	((document.getElementById("first_name").value).length == 0)
		{
                document.getElementById("first_name").focus();
                alert("Please enter Your Name.");
                return false;
        }

	if (!first_name.test(myForm.first_name.value))
		{
			alert("Please enter a valid Name.");
			return false;
		}

	if	((document.getElementById("last_name").value).length == 0)
		{
                document.getElementById("last_name").focus();
                alert("Please enter Your surname.");
                return false;
        }

	if (!last_name.test(myForm.last_name.value))
		{
			alert("Please enter a valid surname.");
			return false;
		}

	if	((document.getElementById("house_no").value).length == 0)
		{
                document.getElementById("house_no").focus();
                alert("Please enter a house number.");
                return false;
        }

	if (!house_no.test(myForm.house_no.value))
		{
			alert("Please enter a valid house number.");
			return false;
		}

	if	((document.getElementById("street").value).length == 0)
		{
                document.getElementById("street").focus();
                alert("Please enter a street name.");
                return false;
        }

	if (!street.test(myForm.street.value))
		{
			alert("Please enter a valid street name - for example Oxford Street, Oakwood Avenue.");
			return false;
		}

	if	((document.getElementById("postcode").value).length == 0)
		{
                document.getElementById("postcode").focus();
                alert("Please enter Your postcode.");
                return false;
        }

	if (!postcode.test(myForm.postcode.value))
		{
			alert("Please enter a valid UK postcode.");
			return false;
		}

	if	((document.getElementById("email").value).length == 0)
		{
                document.getElementById("email").focus();
                alert("Please enter Your E-mail address.");
                return false;
        }

	if (!email.test(myForm.email.value))
		{
			alert("Invalid E-mail address");
			return false;
		}

	if	((document.getElementById("phone").value).length == 0)
		{
                document.getElementById("phone").focus();
                alert("Please enter Your telephone number.");
                return false;
        }

	if (!phone.test(myForm.phone.value))
		{
			alert("Please enter a valid UK telephone number.");
			return false;
		}

	if	((document.getElementById("password").value).length == 0)
		{
                document.getElementById("password").focus();
                alert("Please enter a password.");
                return false;
        }

	if 	(!password.test(myForm.password.value))
		{
			alert("Please enter a valid password - minimum 6 characters, use letters, numbers, underscores or hyphens.");
			return false;
		}


	if	((document.getElementById("pass_con").value).length == 0)
		{
        	document.getElementById("pass_con").focus();
        	alert("Please confirm your password.");
        	return false;
        }

}

</script>


<script type="text/javascript">

function confirmPass()
{
    var pass = document.getElementById("password").value
    var confPass = document.getElementById("pass_con").value
    if(pass != confPass)
    {
        alert('Wrong confirm password!');
        return false;
    }
}
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



<div id="registration">

	<table id="reg_table" cellpadding="0" cellspacing="1">

		<tr>
		<td><form name="myForm" method="post" onSubmit="return checkThis()" action="register_confirmation.php">
		<table width="100%" border="0" cellspacing="1" cellpadding="3">
		<tr>
		<td colspan="3"><h1>Please insert your details</h1></td>
		</tr>

		<tr>
		<td><h4>&nbsp;</h4></td>
		</tr>

		<tr>
		<td><h4>Choose Username</h4></td>
		<td><input name="username" type="text" id="username"></td>
		</tr>

		<tr>
		<td><h4>First name</h4></td>
		<td><input name="first_name" type="text" id="first_name"></td>
		</tr>

		<tr>
		<td><h4>Last name</h4></td>
		<td><input name="last_name" type="text" id="last_name"></td>
		</tr>

		<tr>
		<td><h4>House number</h4></td>
		<td><input name="house_no" type="text" id="house_no"></td>
		</tr>

		<tr>
		<td><h4>Street</h4></td>
		<td><input name="street" type="text" id="street"></td>
		</tr>

		<tr>
		<td><h4>Postcode</h4></td>
		<td><input name="postcode" type="text" id="postcode"></td>
		</tr>

		<tr>
		<td><h4>E-mail</h4></td>
		<td><input name="email" type="text" id="email"></td>
		</tr>

		<tr>
		<td><h4>Phone</h4></td>
		<td><input name="phone" type="text" id="phone"></td>
		</tr>

		<tr>
		<td><h4>Password</h4></td>
		<td><input name="password" type="password" id="password"></td>
		</tr>

		<tr>
		<td><h4>Confirm password</h4></td>
		<td><input name="pass_con" type="password" id="pass_con" onblur="confirmPass()"></td>
		</tr>

		<tr>
		<td colspan="3" align="center"><br><br><h6><input type="submit" class="buttons" name="btnAdd" value="Submit"/>
										<input type="reset" class="buttons" name="btnReset" value="Reset"/></h6><br></td>
		</tr>

	</table>
	</form>

	</td>
	</tr>

	</table>

</div>

</section>




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