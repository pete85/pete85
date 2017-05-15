<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jungheinrich Connections</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>

<header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div id="userDiv" class="navbar-header">
				<h2 id="userName">Hello [NAME]</h2>
				<button id="btnLogout" type="button" class="btn btn-danger">Logout</button>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobileMenu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img class="mainLogo" src="images/jungheinrich_logo_400x90.png" alt="Jungheinrich logo"/></a>
			</div>
			<div class="collapse navbar-collapse" id="mobileMenu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="leads.php">Leads</a></li>
					<li><a href="business.php" class="active-page">New business</a></li>
					<li><a href="reports.php">Reports</a></li>
					<li><a href="adhoc.php">Ad-hoc</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>



	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="js/form-validation.js"></script>
	<script src="js/jungheinrichscripts.js"></script>
	
</body>
</html>