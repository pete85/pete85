	<?php

	include("include/connect.php");

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

<p>Hi</p>

</div>



<section class="middle">



<div id="reg_ok">

	<?php

		$tbl_name="customer"; // Table name

		// Get values from form
		$username=$_POST['username'];
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$house_no=$_POST['house_no'];
		$street=$_POST['street'];
		$postcode=$_POST['postcode'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];

		// Insert data into mysql
		$sql="INSERT INTO $tbl_name(username, first_name, last_name, house_no, street, postcode, email, phone, password)
		VALUES('$username','$first_name', '$last_name', '$house_no', '$street', '$postcode', '$email', '$phone', '$password')";
		$result=mysql_query($sql);

		// if successfully insert data into database, displays message "Successful".
		if($result)
		{
			echo "<h1>Thank You. You have signed up successfully.</h1>";
			echo "<h5>Please go back to main page and log in.</h5>";
			echo "<BR>";
			echo "<h5><a href='index.php'>Back Home</a></h5>";
		}

		else
		{
			echo "ERROR";
		}

	// close connection
	mysql_close();
	?>

</div>




</section>






<footer>
<div id="copyright">Copyright by Piotr Furmanek</div>
</footer>



</div>
</body>
</html>