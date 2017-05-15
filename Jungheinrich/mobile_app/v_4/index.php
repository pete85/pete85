<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jungheinrich mobile</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jungheinrich_themes.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head>
<body>




	<section id="login" data-role="page">

		<header data-role="header" data-id="nav" data-position="fixed">
			<p><img class="jungheinrich_logo" src="images/jungheinrich_logo.png" alt="Jungheinrich logo" /></p>
		</header><!-- /header -->


		<div data-role="content">	
				<h1 class="introText">Welcome to<br/>Connections</h1>

				<p>Account login</p>

				<form id="login_form" name="login_form" method="get" action="enquiry.php">
					
					<div data-role="fieldcontain" class="ui-hide-label">
						<label for="username">ID</label>
						<input type="text" name="username" id="username" value="" placeholder="ID">
					</div>
					<div data-role="fieldcontain" class="ui-hide-label">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" value="" placeholder="Password">
					</div>
					<div class="ui-field-contain">
						<input type="submit" value="LOGIN" />
					</div>
				</form>



	
		</div><!-- /content -->

	</section><!-- /page -->


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/jquery.steps.min.js"></script>
	<script src="js/form-validation.js"></script>
	<script src="js/jungheinrichscripts.js"></script>

</body>
</html>
