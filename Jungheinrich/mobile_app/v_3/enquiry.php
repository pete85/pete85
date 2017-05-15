<!DOCTYPE html> 
<html> 
	<head> 
	<title>Jungheinrich mobile</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="css/jungheinrich.css" />
	<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head> 
<body> 

	<section id="login" data-role="page">

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
				<h1 class="txtCentered" id="introText">Enquiry</h1>

				<form id="login_form" name="enquiry_form" method="get" action="enquiry_confirmed.php">
					
					<div data-role="fieldcontain" class="ui-hide-label">
						<label for="companyName">Company name</label>
						<input type="text" name="companyName" id="companyName" value="" placeholder="Company name">
					</div>
					<div data-role="fieldcontain" class="ui-hide-label">
						<label for="postcode">Postcode</label>
						<input type="text" name="postcode" id="postcode" value="" placeholder="Postcode">
					</div>
					<div data-role="fieldcontain" class="ui-hide-label">
						<label for="contactName">Contact name</label>
						<input type="text" name="contactName" id="contactName" value="" placeholder="Contact name">
					</div>
					<div data-role="fieldcontain" class="ui-hide-label">
						<label for="enquiryType">Enquiry type</label>
						<select name="enquiryType" id="enquiryType" data-theme="b">
							<option value="value1">Value 1</option>
							<option value="value2">Value 2</option>
							<option value="value3">Value 3</option>
							<option value="value4">Value 4</option>
						</select>
					</div>

					<div class="ui-field-contain">
						<input type="submit" value="NEXT" />
					</div>
				</form>



	
		</div><!-- /content -->

	</section><!-- /page -->

</body>
</html>