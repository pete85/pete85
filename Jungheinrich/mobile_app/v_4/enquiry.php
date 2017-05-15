<!DOCTYPE html> 
<html> 
	<head> 
	<title>Jungheinrich mobile</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jungheinrich_themes.min.css" />
	<link rel="stylesheet" href="css/jquery.steps.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head> 
<body> 

	<section id="enquiry" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#home" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="enquiry.php" class="mobile-menu-active"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	
				<h1 class="txtCentered" id="introText">Enquiry</h1>

				<form id="enquiry_form" name="enquiry_form" method="get" action="enquiry_confirmed.php">
				    <h3>Step 1</h3>
				    <fieldset data-role="fieldcontain" class="ui-hide-label">

						<label for="companyName">Company name</label>
						<input type="text" name="companyName" id="companyName" value="" placeholder="Company name">

						<label for="postcode">Postcode</label>
						<input type="text" name="postcode" id="postcode" value="" placeholder="Postcode">

						<label for="contactName">Contact name</label>
						<input type="text" name="contactName" id="contactName" value="" placeholder="Contact name">

						<label for="enquiryType">Enquiry type</label>
						<select name="enquiryType" id="enquiryType" data-theme="c">
							<option value="" disabled="disabled" selected>Enquiry type</option>
							<option value="">Tyres</option>
							<option value="">Racking</option>
							<option value="">New truck</option>
						</select>

						<label for="product">Product</label>
						<select name="product" id="product" data-theme="c">
							<option value="" disabled="disabled" selected>Product</option>
							<option value="">New tyre</option>
							<option value="">Tyre racking</option>
							<option value="">Jungheinrich forklift</option>
						</select>
					</fieldset>

				    <h3>Step 2</h3>
				    <fieldset data-role="fieldcontain" class="ui-hide-label">

						<label for="enquiryInfo1">Enquiry info 1</label>
						<select name="enquiryInfo1" id="enquiryInfo1" data-theme="c">
							<option value="" disabled="disabled" selected>Enquiry info 1</option>
							<option value="">info a</option>
							<option value="">info b</option>
							<option value="">info c</option>
						</select>

						<label for="enquiryInfo2">Enquiry info 2</label>
						<select name="enquiryInfo2" id="enquiryInfo2" data-theme="c">
							<option value="" disabled="disabled" selected>Enquiry info 2</option>
							<option value="">info a</option>
							<option value="">info b</option>
							<option value="">info c</option>
						</select>

						<label for="enquiryInfo3">Enquiry info 3</label>
						<select name="enquiryInfo3" id="enquiryInfo3" data-theme="c">
							<option value="" disabled="disabled" selected>Enquiry info 3</option>
							<option value="">info a</option>
							<option value="">info b</option>
							<option value="">info c</option>
						</select>

						<label for="additional_info">Additional info</label>
    					<textarea id="additional_info" placeholder="Additional info" rows="3"></textarea>


					</fieldset>
				</form>






	
		</div><!-- /content -->

	</section><!-- /page -->

	<section id="thankyou" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><a href="#home" data-role="none"><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></a></p>
			<div class="mobile-nav-button">
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
				<div class="mobile-nav-button__line"></div>
			</div>
			<nav class="mobile-menu">
				<ul>
					<li><a href="enquiry.php" class="mobile-menu-active"><i class="navbar-icon fa fa-question" aria-hidden="true"></i> NEW ENQUIRY</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-check" aria-hidden="true"></i> REVIEW LEADS</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-gbp" aria-hidden="true"></i> REVIEW SALES</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-star" aria-hidden="true"></i> REWARD STORE</a></li>
					<li><a href="#"><i class="navbar-icon fa fa-bell" aria-hidden="true"></i> NOTIFICATIONS</a></li>
				</ul>
			</nav>
		</header><!-- /header -->


		<div data-role="content">	
				<h1 class="introText">Thank you</h1>

				<br/>
	
				<h3 class="txtCentered" id="txtThankyou">Your lead has been<br/>successfully submitted</h3>

				<div class="divider"></div>

				<a href="stats.php" data-ajax="false" class="ui-btn">HOME</a>
		</div><!-- /content -->

	</section><!-- /page -->

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/jquery.steps.min.js"></script>
	<script src="js/jungheinrichscripts.js"></script>
	<script src="js/form-validation.js"></script>

</body>
</html>