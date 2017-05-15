<!DOCTYPE html> 
<html> 
<head> 
	<title>Jungheinrich mobile</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jungheinrich.css" />
<!-- 	<link rel="stylesheet" href="css/percircle.css" /> -->
</head> 
<body> 


	<section id="home" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#home" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a class="mobile-menu-active"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->

		<div data-role="content">	
			<h1 class="introText">Enquiry</h1>

				<form id="login_form" name="login_form" method="get" action="enquiry.php">
					
					<div class="ui-field-contain">
						<label for="companyName" class="ui-hidden-accessible">Company name</label>
						<input type="text" name="companyName" id="companyName" value="companyName" placeholder="Company name">
					</div>
					<div class="ui-field-contain">
						<label for="postcode" class="ui-hidden-accessible">Postcode</label>
						<input type="text" name="postcode" id="postcode" value="postcode" placeholder="Postcode">
					</div>
					<div class="ui-field-contain">
						<label for="contactName" class="ui-hidden-accessible">Contact name</label>
						<input type="text" name="contactName" id="contactName" value="contactName" placeholder="Contact name">
					</div>


					<div class="ui-field-contain">
						<input type="submit" value="Login" />
					</div>
				</form>

	
		</div><!-- /content -->

	</section><!-- /page -->



<!-- ******************************************************************************************************
												LOGIN PAGE
******************************************************************************************************  -->


	<section id="login" data-role="page" data-dialog="true">

		<div data-role="header" data-id="nav" data-position="fixed">
			<h1>Header TEST</h1>
			<a href="#home" data-icon="home" data-transition="pop">Home</a>
		</div><!-- /header -->

		<div data-role="content">	
			<h1>Hello</h1>
			<p>Please login to access the rewardstore</p>
			<br/>

			<form action="">
				<div data-role="fieldcontain">
					<label for="username">Username</label>
					<input type="text" id="username"/>					
				</div>
				<div data-role="fieldcontain">
					<label for="password">Password</label>
					<input type="password" id="password"/>
				</div>
				<button type="submit" id="btnLogin">Login</button>
			</form>
			<a href="#home" data-rel="back">Back</a>
		
		</div><!-- /content -->

	</section><!-- /page -->

	<section id="new-enquiry" data-role="page">


	</section><!-- /page -->

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/jungheinrichscripts.js"></script>

</body>
</html>